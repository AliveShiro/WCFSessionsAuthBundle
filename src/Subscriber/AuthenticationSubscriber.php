<?php

namespace xanily\WCFSessionsAuthBundle\Subscriber;

use Doctrine\ORM\NonUniqueResultException;
use xanily\WCFSessionsAuthBundle\Entity\WcfSession;
use xanily\WCFSessionsAuthBundle\Entity\WcfUser;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

class AuthenticationSubscriber implements EventSubscriberInterface
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectManager|object
     */
    private $entityManager;

    /**
     * @var String
     */
    private $cookiePrefix;

    /**
     * @var Request
     */
    private $request;

    public function __construct(ManagerRegistry $registry, String $entity, String $cookieName)
    {
        $this->entityManager = $registry->getManager($entity);
        $this->cookiePrefix = $cookieName;
    }

    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return array(
            SecurityEvents::INTERACTIVE_LOGIN => 'onAuthenticationSuccess',
        );
    }

    /**
     * @param InteractiveLoginEvent $event
     *
     * @throws \Exception
     */
    public function onAuthenticationSuccess(InteractiveLoginEvent $event)
    {
        $this->request = $event->getRequest();
        $user = $event->getAuthenticationToken()->getUser();

        if (!$user instanceof WcfUser) {
            return;
        }

        $sessionRepository = $this->entityManager->getRepository(WcfSession::class);

        $session = $sessionRepository
            ->createQueryBuilder('s')
            ->select('s, u')
            ->join('s.user', 'u')
            ->where('u.userID = :id')
            ->setParameter('id', $user->getId())
            ->orderBy('s.lastActivityTime', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$session) {
            $session = new WcfSession($user);
            $session->setUser($user);

            $cookieSessionKey = $this->getCookie('cookieHash');
            $session->setAutologin($cookieSessionKey ? true : false);
        }

        $session->setLastactivitytime(time());
        $session->setIP($this->request->getClientIp());
        $session->setUseragent($this->request->headers->get('User-Agent'));

        $this->entityManager->persist($session);
        $this->entityManager->flush();

        $this->updateCookies($session->getSessionid(), $user->getId());
    }

    private function updateCookies($sessionId, $userId)
    {
        $this->setCookie('cookieHash', $sessionId);
        $this->setCookie('userID', $userId);
    }

    /**
     * @param $cookieName
     *
     * @return bool|mixed
     */
    private function getCookie($cookieName)
    {
        $fullCookieName = $this->getFullCookieName($cookieName);

        if (!$this->request->cookies->has($fullCookieName)) {
            return false;
        }

        return $this->request->cookies->get($fullCookieName);
    }

    /**
     * @param $cookieName
     * @param $value
     */
    private function setCookie($cookieName, $value)
    {
        $fullCookieName = $this->getFullCookieName($cookieName);

        $this->request->cookies->set($fullCookieName, $value);
    }

    /**
     * @param $cookieName
     *
     * @return string
     */
    private function getFullCookieName($cookieName) {
        return $this->cookiePrefix . '_' . $cookieName;
    }
}