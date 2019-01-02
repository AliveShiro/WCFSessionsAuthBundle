<?php

namespace xanily\WCFSessionsAuthBundle\Security\Guard;

use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use xanily\WCFSessionsAuthBundle\Entity\WcfUser;

class FormAuthenticator extends AbstractFormLoginAuthenticator
{
    use TargetPathTrait;

    private $entityManager;
    private $router;
    private $csrfTokenManager;
    private $encoder;
    private $cookiePrefix = '';
    private $targetPath = '';

    /**
     * FormAuthenticator constructor.
     * @param ManagerRegistry $managerRegistry
     * @param string $entityManager
     * @param RouterInterface $router
     * @param CsrfTokenManagerInterface $csrfTokenManager
     * @param UserPasswordEncoderInterface $encoder
     * @param String $cookiePrefix
     */
    public function __construct(ManagerRegistry $managerRegistry, string $entityManager, RouterInterface $router, CsrfTokenManagerInterface $csrfTokenManager, UserPasswordEncoderInterface $encoder, String $cookiePrefix, String $targetPath)
    {
        $this->entityManager = $managerRegistry->getManager($entityManager);
        $this->router = $router;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->encoder = $encoder;
        $this->cookiePrefix = $cookiePrefix;
        $this->targetPath = $targetPath;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function supports(Request $request)
    {
        return 'login' === $request->attributes->get('_route')
            && $request->isMethod('POST');
    }

    /**
     * @param Request $request
     * @return array|mixed
     */
    public function getCredentials(Request $request)
    {
        $credentials = [
            'username' => $request->request->get('_username'),
            'password' => $request->request->get('_password'),
            'csrf_token' => $request->request->get('_csrf_token'),
        ];
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['username']
        );

        return $credentials;
    }

    /**
     * @param mixed $credentials
     * @param UserProviderInterface $userProvider
     * @return null|WcfUser|UserInterface
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        $user = $this->entityManager->getRepository(WcfUser::class)->findOneBy(['username' => $credentials['username']]);

        if (!$user) {
            // fail authentication with a custom error
            throw new CustomUserMessageAuthenticationException('Benutzer konnte nicht gefunden werden.');
        }

        return $user;
    }

    /**
     * @param mixed $credentials
     * @param UserInterface $user
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        return $this->encoder->isPasswordValid($user, $credentials['password']);
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @param string $providerKey
     * @return RedirectResponse $response
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        $response = new RedirectResponse($this->targetPath);

        $sidCookieName = $this->getFullCookieName('cookieHash');
        $userIdCookieName = $this->getFullCookieName('userID');

        $sid = $request->cookies->get($sidCookieName);
        $userId = $request->cookies->get($userIdCookieName);

        $response->headers->setCookie(new Cookie($sidCookieName, $sid, strtotime('+1 week')));
        $response->headers->setCookie(new Cookie($userIdCookieName, $userId, strtotime('+1 week')));

        return $response;
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('login');
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