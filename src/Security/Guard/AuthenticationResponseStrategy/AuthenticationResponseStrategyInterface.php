<?php

namespace xanily\WCFSessionsAuthBundle\Security\Guard\AuthenticationResponseStrategy;

/**
 * Interface for strategies of authentication responses.
 */
interface AuthenticationResponseStrategyInterface
{

    /**
     * Returns the Response or null
     * 
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function getResponse();

}