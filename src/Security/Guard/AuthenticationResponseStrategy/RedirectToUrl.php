<?php

namespace xanily\WCFSessionsAuthBundle\Security\Guard\AuthenticationResponseStrategy;

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Uses the router to redirect to a route.
 */
class RedirectToUrl implements AuthenticationResponseStrategyInterface
{

    /**
     * @var string
     */
    protected $url;

    /**
     * RedirectToRoute constructor.
     *
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Returns a RedirectResponse with the url.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function getResponse()
    {
        return new RedirectResponse($this->url);
    }
    
}