<?php

namespace xanily\WCFSessionsAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class WcfSession
 * @package xanily\WCFSessionsAuthBundle\Entity
 * @Orm\Entity
 * @Orm\Table(name="session")
 */
class WcfSession
{
    /**
     * @var string
     * @Orm\Id
     * @Orm\Column(name="sessionID", type="string", length=40)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionID;

    /**
     * @var WcfUser
     * @ORM\ManyToOne(targetEntity="WcfUser", inversedBy="sessions")
     * @ORM\JoinColumn(name="userID", referencedColumnName="userID")
     */
    private $user;

    /**
     * @var string
     * @ORM\Column(name="ipAddress", type="string", nullable=false)
     */
    private $ip;

    /**
     * @var string
     * @ORM\Column(name="userAgent", type="string", length=255, nullable=false)
     */
    private $userAgent;

    /**
     * @var integer
     * @ORM\Column(name="lastActivityTime", type="integer", nullable=false)
     */
    private $lastActivityTime;

    /**
     * @var string
     * @ORM\Column(name="requestURI", type="string", length=255, nullable=false)
     */
    private $requestURI;

    /**
     * @var string
     * @ORM\Column(name="requestMethod", type="string", length=7, nullable=false)
     */
    private $requestMethod;

    /**
     * @var integer
     * @ORM\Column(name="spiderID", type="integer", nullable=true)
     */
    private $spiderID;

    /**
     * @var string
     * @ORM\Column(name="sessionVariables", type="text", length=16777215, nullable=true)
     */
    private $sessionVariables;

    /**
     * WcfSession constructor
     *
     * @param WcfUser $user
     *
     * @throws \Exception
     */
    public function __construct(WcfUser $user)
    {
        $this->setUser($user);
        $this->setLastActivityTime(time());
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * @return WcfUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param WcfUser
     * @return WcfSession
     */
    public function setUser(WcfUser $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getIP()
    {
        return $this->ip;
    }

    /**
     * @param string
     * @return WcfSession
     */
    public function setIP($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string
     * @return WcfSession
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * @return integer
     */
    public function getLastActivityTime()
    {
        return $this->lastActivityTime;
    }

    /**
     * @param integer
     * @return WcfSession
     */
    public function setLastActivityTime($lastActivityTime)
    {
        $this->lastActivityTime = $lastActivityTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestURI()
    {
        return $this->requestURI;
    }

    /**
     * @param string
     * @return WcfSession
     */
    public function setRequestURI($requestURI)
    {
        $this->requestURI = $requestURI;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * @param string
     * @return WcfSession
     */
    public function setRequestMethod($requestMethod)
    {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * @return integer
     */
    public function getSpiderID()
    {
        return $this->spiderID;
    }

    /**
     * @param integer
     * @return WcfSession
     */
    public function setSpiderID($spiderID)
    {
        $this->spiderID = $spiderID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionVariables()
    {
        return $this->sessionVariables;
    }

    /**
     * @param string
     * @return WcfSession
     */
    public function setSessionVariables($sessionVariables)
    {
        $this->sessionVariables = $sessionVariables;
        return $this;
    }
}