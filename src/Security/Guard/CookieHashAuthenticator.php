<?php

namespace xanily\WCFSessionsAuthBundle\Security\Guard;

use xanily\WCFSessionsAuthBundle\Security\Guard\AuthenticationResponseStrategy\AuthenticationResponseStrategyInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * GuardAuthenticator that untilizes the wcf cookie .
 */
class CookieHashAuthenticator extends AbstractGuardAuthenticator
{

    /**
     * @var string
     */
    protected $wcfCookiePrefix;
    
    /**
     * @var string
     */
    protected $startUrl;

    /**
     * @var AuthenticationResponseStrategyInterface
     */
    protected $successStrategy;

    /**
     * @var AuthenticationResponseStrategyInterface
     */
    protected $failureStrategy;

    /**
     * @var AuthenticationResponseStrategyInterface
     */
    protected $startStrategy;

    /**
     * CookieHashAuthenticator constructor.
     *
     * @param AuthenticationResponseStrategyInterface $startStrategy
     * @param AuthenticationResponseStrategyInterface $successStrategy
     * @param AuthenticationResponseStrategyInterface $failureStrategy
     * @param string                                  $wcfCookiePrefix
     */
    public function __construct(
        AuthenticationResponseStrategyInterface $startStrategy,
        AuthenticationResponseStrategyInterface $successStrategy,
        AuthenticationResponseStrategyInterface $failureStrategy,
        $wcfCookiePrefix
    )
    {
        $this->startStrategy   = $startStrategy;
        $this->wcfCookiePrefix = $wcfCookiePrefix;
        $this->successStrategy = $successStrategy;
        $this->failureStrategy = $failureStrategy;
    }

    /**
     * Returns the credentials with the cookieHash or null if it is not set.
     *
     * @param Request $request
     *
     * @return array|null
     */
    public function getCredentials(Request $request)
    {
        if (!$token = $request->cookies->get($this->wcfCookiePrefix . 'cookieHash')) {
            return null;
        }

        return array(
            'cookieHash' => $token,
        );
    }

    /**
     * Returns the user that can be identified with the sessionkey.
     *
     * @param mixed                 $credentials
     * @param UserProviderInterface $userProvider
     *
     * @return UserInterface
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $sessionKey = $credentials['cookieHash'];

        return $userProvider->loadUserByUsername($sessionKey);
    }

    /**
     * No credential check is needed since the wcf is only adding the userid to validated sessions
     *
     * @param mixed         $credentials
     * @param UserInterface $user
     *
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    /**
     * On success, let the request continue
     *
     * @param Request        $request
     * @param TokenInterface $token
     * @param string         $providerKey
     *
     * @return Response|null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return $this->successStrategy->getResponse();
    }

    /**
     * If the cookie is invalid, forward the user to the login.
     * 
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return Response|null
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        return $this->failureStrategy->getResponse();
    }

    /**
     * Returns a response that directs the user to authenticate.
     * 
     * @param Request                      $request
     * @param AuthenticationException|null $authException
     *
     * @return Response|null
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        return $this->startStrategy->getResponse();
    }

    /**
     * We are validating a cookie which is the current login status.
     * 
     * @return bool
     */
    public function supportsRememberMe()
    {
        return false;
    }

    /**
     * Does the authenticator support the given Request?
     *
     * If this returns false, the authenticator will be skipped.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function supports(Request $request)
    {
        // TODO: Implement supports() method.
        return false;
    }
}