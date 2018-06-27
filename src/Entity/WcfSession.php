<?php

namespace xanily\WCFSessionsAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WcfSession
 *
 * @ORM\Table(name="session", indexes={@ORM\Index(name="packageID", columns={"lastActivityTime", "spiderID"}), @ORM\Index(name="93919bae2c5bdd073bedaa4987bf1923_fk", columns={"userID"}), @ORM\Index(name="b5cc45ca92a472f0aa34b7256c104c59_fk", columns={"spiderID"})})
 * @ORM\Entity
 */
class WcfSession
{
    /**
     * @var string
     *
     * @ORM\Column(name="ipAddress", type="string", length=39, nullable=false)
     */
    private $ipaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="userAgent", type="string", length=255, nullable=false)
     */
    private $useragent;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastActivityTime", type="integer", nullable=false)
     */
    private $lastactivitytime;

    /**
     * @var string
     *
     * @ORM\Column(name="requestURI", type="string", length=255, nullable=false)
     */
    private $requesturi;

    /**
     * @var string
     *
     * @ORM\Column(name="requestMethod", type="string", length=7, nullable=false)
     */
    private $requestmethod;

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=255, nullable=false)
     */
    private $controller;

    /**
     * @var string
     *
     * @ORM\Column(name="parentObjectType", type="string", length=255, nullable=false)
     */
    private $parentobjecttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentObjectID", type="integer", nullable=false)
     */
    private $parentobjectid;

    /**
     * @var string
     *
     * @ORM\Column(name="objectType", type="string", length=255, nullable=false)
     */
    private $objecttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="objectID", type="integer", nullable=false)
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionVariables", type="text", length=16777215, nullable=true)
     */
    private $sessionvariables;

    /**
     * @var integer
     *
     * @ORM\Column(name="spiderID", type="integer", nullable=true)
     */
    private $spiderid;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionID", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionid;

    /**
     * @var WcfUser
     *
     * @ORM\ManyToOne(targetEntity="WcfUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userID", referencedColumnName="userID")
     * })
     */
    private $userid;



    /**
     * Set ipaddress
     *
     * @param string $ipaddress
     * @return WcfSession
     */
    public function setIpaddress($ipaddress)
    {
        $this->ipaddress = $ipaddress;

        return $this;
    }

    /**
     * Get ipaddress
     *
     * @return string 
     */
    public function getIpaddress()
    {
        return $this->ipaddress;
    }

    /**
     * Set useragent
     *
     * @param string $useragent
     * @return WcfSession
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;

        return $this;
    }

    /**
     * Get useragent
     *
     * @return string 
     */
    public function getUseragent()
    {
        return $this->useragent;
    }

    /**
     * Set lastactivitytime
     *
     * @param integer $lastactivitytime
     * @return WcfSession
     */
    public function setLastactivitytime($lastactivitytime)
    {
        $this->lastactivitytime = $lastactivitytime;

        return $this;
    }

    /**
     * Get lastactivitytime
     *
     * @return integer 
     */
    public function getLastactivitytime()
    {
        return $this->lastactivitytime;
    }

    /**
     * Set requesturi
     *
     * @param string $requesturi
     * @return WcfSession
     */
    public function setRequesturi($requesturi)
    {
        $this->requesturi = $requesturi;

        return $this;
    }

    /**
     * Get requesturi
     *
     * @return string 
     */
    public function getRequesturi()
    {
        return $this->requesturi;
    }

    /**
     * Set requestmethod
     *
     * @param string $requestmethod
     * @return WcfSession
     */
    public function setRequestmethod($requestmethod)
    {
        $this->requestmethod = $requestmethod;

        return $this;
    }

    /**
     * Get requestmethod
     *
     * @return string 
     */
    public function getRequestmethod()
    {
        return $this->requestmethod;
    }

    /**
     * Set controller
     *
     * @param string $controller
     * @return WcfSession
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Get controller
     *
     * @return string 
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set parentobjecttype
     *
     * @param string $parentobjecttype
     * @return WcfSession
     */
    public function setParentobjecttype($parentobjecttype)
    {
        $this->parentobjecttype = $parentobjecttype;

        return $this;
    }

    /**
     * Get parentobjecttype
     *
     * @return string 
     */
    public function getParentobjecttype()
    {
        return $this->parentobjecttype;
    }

    /**
     * Set parentobjectid
     *
     * @param integer $parentobjectid
     * @return WcfSession
     */
    public function setParentobjectid($parentobjectid)
    {
        $this->parentobjectid = $parentobjectid;

        return $this;
    }

    /**
     * Get parentobjectid
     *
     * @return integer 
     */
    public function getParentobjectid()
    {
        return $this->parentobjectid;
    }

    /**
     * Set objecttype
     *
     * @param string $objecttype
     * @return WcfSession
     */
    public function setObjecttype($objecttype)
    {
        $this->objecttype = $objecttype;

        return $this;
    }

    /**
     * Get objecttype
     *
     * @return string 
     */
    public function getObjecttype()
    {
        return $this->objecttype;
    }

    /**
     * Set objectid
     *
     * @param integer $objectid
     * @return WcfSession
     */
    public function setObjectid($objectid)
    {
        $this->objectid = $objectid;

        return $this;
    }

    /**
     * Get objectid
     *
     * @return integer 
     */
    public function getObjectid()
    {
        return $this->objectid;
    }

    /**
     * Set sessionvariables
     *
     * @param string $sessionvariables
     * @return WcfSession
     */
    public function setSessionvariables($sessionvariables)
    {
        $this->sessionvariables = $sessionvariables;

        return $this;
    }

    /**
     * Get sessionvariables
     *
     * @return string 
     */
    public function getSessionvariables()
    {
        return $this->sessionvariables;
    }

    /**
     * Set spiderid
     *
     * @param integer $spiderid
     * @return WcfSession
     */
    public function setSpiderid($spiderid)
    {
        $this->spiderid = $spiderid;

        return $this;
    }

    /**
     * Get spiderid
     *
     * @return integer 
     */
    public function getSpiderid()
    {
        return $this->spiderid;
    }

    /**
     * Get sessionid
     *
     * @return string 
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set userid
     *
     * @param WcfUser $userid
     * @return WcfSession
     */
    public function setUserid(WcfUser $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return WcfUser
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
