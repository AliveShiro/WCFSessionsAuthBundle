<?php

namespace xanily\WCFSessionsAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WcfUserGroup
 *
 * @ORM\Table(name="user_group")
 * @ORM\Entity
 */
class WcfUserGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="groupName", type="string", length=255, nullable=false)
     */
    private $groupname;

    /**
     * @var string
     *
     * @ORM\Column(name="groupDescription", type="text", length=65535, nullable=true)
     */
    private $groupdescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="groupType", type="boolean", nullable=false)
     */
    private $grouptype;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="userOnlineMarking", type="string", length=255, nullable=false)
     */
    private $useronlinemarking;

    /**
     * @var boolean
     *
     * @ORM\Column(name="showOnTeamPage", type="boolean", nullable=false)
     */
    private $showonteampage;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="xanily\WCFSessionsAuthBundle\Entity\WcfUser", mappedBy="groupid")
     */
    private $userid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set groupname
     *
     * @param string $groupname
     * @return WcfUserGroup
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Get groupname
     *
     * @return string 
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Set groupdescription
     *
     * @param string $groupdescription
     * @return WcfUserGroup
     */
    public function setGroupdescription($groupdescription)
    {
        $this->groupdescription = $groupdescription;

        return $this;
    }

    /**
     * Get groupdescription
     *
     * @return string 
     */
    public function getGroupdescription()
    {
        return $this->groupdescription;
    }

    /**
     * Set grouptype
     *
     * @param boolean $grouptype
     * @return WcfUserGroup
     */
    public function setGrouptype($grouptype)
    {
        $this->grouptype = $grouptype;

        return $this;
    }

    /**
     * Get grouptype
     *
     * @return boolean 
     */
    public function getGrouptype()
    {
        return $this->grouptype;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return WcfUserGroup
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set useronlinemarking
     *
     * @param string $useronlinemarking
     * @return WcfUserGroup
     */
    public function setUseronlinemarking($useronlinemarking)
    {
        $this->useronlinemarking = $useronlinemarking;

        return $this;
    }

    /**
     * Get useronlinemarking
     *
     * @return string 
     */
    public function getUseronlinemarking()
    {
        return $this->useronlinemarking;
    }

    /**
     * Set showonteampage
     *
     * @param boolean $showonteampage
     * @return WcfUserGroup
     */
    public function setShowonteampage($showonteampage)
    {
        $this->showonteampage = $showonteampage;

        return $this;
    }

    /**
     * Get showonteampage
     *
     * @return boolean 
     */
    public function getShowonteampage()
    {
        return $this->showonteampage;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Add userid
     *
     * @param \xanily\WCFSessionsAuthBundle\Entity\WcfUser $userid
     * @return WcfUserGroup
     */
    public function addUserid(\xanily\WCFSessionsAuthBundle\Entity\WcfUser $userid)
    {
        $this->userid[] = $userid;

        return $this;
    }

    /**
     * Remove userid
     *
     * @param \xanily\WCFSessionsAuthBundle\Entity\WcfUser $userid
     */
    public function removeUserid(\xanily\WCFSessionsAuthBundle\Entity\WcfUser $userid)
    {
        $this->userid->removeElement($userid);
    }

    /**
     * Get userid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
