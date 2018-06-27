<?php

namespace xanily\WCFSessionsAuthBundle\Security\Guard\AuthenticationResponseStrategy;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

/**
 * Uses the router to redirect to a route.
 */
class RedirectToRoute implements AuthenticationResponseStrategyInterface
{

    /**
     * @var string
     */
    protected $route;

    /**
     * @var Router
     */
    protected $router;

    /**
     * RedirectToRoute constructor.
     *
     * @param Router $router
     * @param string $route
     */
    public function __construct(Router $router, $route)
    {
        $this->router = $router;
        $this->route  = $route;
    }

    /**
     * Returns a RedirectResponse with the
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function getResponse()
    {
        return new RedirectResponse($this->router->generate($this->route));
    }
    
}