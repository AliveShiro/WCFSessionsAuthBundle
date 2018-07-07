<?php

namespace xanily\WCFSessionsAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class WcfUserGroup
 * @package xanily\WCFSessionsAuthBundle\Entity
 * @ORM\Table(name="user_to_group")
 * @ORM\Entity(readOnly=true)
 */
class WcfUserGroup
{
    /**
     * @var WcfUser
     * @ORM\ManyToOne(targetEntity="WcfUser", inversedBy="groups")
     * @ORM\JoinColumn(name="userID", referencedColumnName="userID")
     */
    private $user;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="groupID", type="integer", nullable=false)
     */
    private $groupID;

    /**
     * @return integer
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * @param integer $groupID
     * @return WcfUserGroup
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
        return $this;
    }

    /**
     * @return WcfUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param integer $user
     * @return WcfUserGroup
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

}
