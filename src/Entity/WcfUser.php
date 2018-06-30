<?php

namespace xanily\WCFSessionsAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * WcfUser
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="username", columns={"username"}), @ORM\Index(name="registrationDate", columns={"registrationDate"}), @ORM\Index(name="styleID", columns={"styleID"}), @ORM\Index(name="activationCode", columns={"activationCode"}), @ORM\Index(name="registrationData", columns={"registrationIpAddress", "registrationDate"}), @ORM\Index(name="activityPoints", columns={"activityPoints"}), @ORM\Index(name="likesReceived", columns={"likesReceived"}), @ORM\Index(name="99534d56799b78a28b3afd08a5582998_fk", columns={"avatarID"}), @ORM\Index(name="4701917c09ab22152907bc412a1ff9bf_fk", columns={"rankID"}), @ORM\Index(name="e9baf116e7dc934c6311c3beebabed5d_fk", columns={"userOnlineGroupID"}), @ORM\Index(name="blogEntries", columns={"blogEntries"}), @ORM\Index(name="wbbPosts", columns={"wbbPosts"})})
 * @ORM\Entity(repositoryClass="xanily\WCFSessionsAuthBundle\Repository\WcfUserRepository")
 */
class WcfUser implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="accessToken", type="string", length=40, nullable=false)
     */
    private $accesstoken;

    /**
     * @var integer
     *
     * @ORM\Column(name="languageID", type="integer", nullable=false)
     */
    private $languageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="registrationDate", type="integer", nullable=false)
     */
    private $registrationdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="styleID", type="integer", nullable=false)
     */
    private $styleid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="banned", type="boolean", nullable=false)
     */
    private $banned;

    /**
     * @var string
     *
     * @ORM\Column(name="banReason", type="text", length=16777215, nullable=true)
     */
    private $banreason;

    /**
     * @var integer
     *
     * @ORM\Column(name="activationCode", type="integer", nullable=false)
     */
    private $activationcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastLostPasswordRequestTime", type="integer", nullable=false)
     */
    private $lastlostpasswordrequesttime;

    /**
     * @var string
     *
     * @ORM\Column(name="lostPasswordKey", type="string", length=40, nullable=false)
     */
    private $lostpasswordkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastUsernameChange", type="integer", nullable=false)
     */
    private $lastusernamechange;

    /**
     * @var string
     *
     * @ORM\Column(name="newEmail", type="string", length=255, nullable=false)
     */
    private $newemail;

    /**
     * @var string
     *
     * @ORM\Column(name="oldUsername", type="string", length=255, nullable=false)
     */
    private $oldusername;

    /**
     * @var integer
     *
     * @ORM\Column(name="quitStarted", type="integer", nullable=false)
     */
    private $quitstarted;

    /**
     * @var integer
     *
     * @ORM\Column(name="reactivationCode", type="integer", nullable=false)
     */
    private $reactivationcode;

    /**
     * @var string
     *
     * @ORM\Column(name="registrationIpAddress", type="string", length=39, nullable=false)
     */
    private $registrationipaddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="avatarID", type="integer", nullable=true)
     */
    private $avatarid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disableAvatar", type="boolean", nullable=false)
     */
    private $disableavatar;

    /**
     * @var string
     *
     * @ORM\Column(name="disableAvatarReason", type="text", length=65535, nullable=true)
     */
    private $disableavatarreason;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enableGravatar", type="boolean", nullable=false)
     */
    private $enablegravatar;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="text", length=65535, nullable=true)
     */
    private $signature;

    /**
     * @var boolean
     *
     * @ORM\Column(name="signatureEnableBBCodes", type="boolean", nullable=false)
     */
    private $signatureenablebbcodes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="signatureEnableHtml", type="boolean", nullable=false)
     */
    private $signatureenablehtml;

    /**
     * @var boolean
     *
     * @ORM\Column(name="signatureEnableSmilies", type="boolean", nullable=false)
     */
    private $signatureenablesmilies;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disableSignature", type="boolean", nullable=false)
     */
    private $disablesignature;

    /**
     * @var string
     *
     * @ORM\Column(name="disableSignatureReason", type="text", length=65535, nullable=true)
     */
    private $disablesignaturereason;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastActivityTime", type="integer", nullable=false)
     */
    private $lastactivitytime;

    /**
     * @var integer
     *
     * @ORM\Column(name="profileHits", type="integer", nullable=false)
     */
    private $profilehits;

    /**
     * @var integer
     *
     * @ORM\Column(name="rankID", type="integer", nullable=true)
     */
    private $rankid;

    /**
     * @var string
     *
     * @ORM\Column(name="userTitle", type="string", length=255, nullable=false)
     */
    private $usertitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="userOnlineGroupID", type="integer", nullable=true)
     */
    private $useronlinegroupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="activityPoints", type="integer", nullable=false)
     */
    private $activitypoints;

    /**
     * @var string
     *
     * @ORM\Column(name="notificationMailToken", type="string", length=20, nullable=false)
     */
    private $notificationmailtoken;

    /**
     * @var string
     *
     * @ORM\Column(name="authData", type="string", length=255, nullable=false)
     */
    private $authdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="likesReceived", type="integer", nullable=false)
     */
    private $likesreceived;

    /**
     * @var integer
     *
     * @ORM\Column(name="blogEntries", type="integer", nullable=false)
     */
    private $blogentries;

    /**
     * @var integer
     *
     * @ORM\Column(name="wbbPosts", type="integer", nullable=false)
     */
    private $wbbposts;

    /**
     * @var integer
     *
     * @ORM\Column(name="userID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;



    /**
     * Set username
     *
     * @param string $username
     * @return WcfUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return WcfUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return WcfUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set accesstoken
     *
     * @param string $accesstoken
     * @return WcfUser
     */
    public function setAccesstoken($accesstoken)
    {
        $this->accesstoken = $accesstoken;

        return $this;
    }

    /**
     * Get accesstoken
     *
     * @return string 
     */
    public function getAccesstoken()
    {
        return $this->accesstoken;
    }

    /**
     * Set languageid
     *
     * @param integer $languageid
     * @return WcfUser
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;

        return $this;
    }

    /**
     * Get languageid
     *
     * @return integer 
     */
    public function getLanguageid()
    {
        return $this->languageid;
    }

    /**
     * Set registrationdate
     *
     * @param integer $registrationdate
     * @return WcfUser
     */
    public function setRegistrationdate($registrationdate)
    {
        $this->registrationdate = $registrationdate;

        return $this;
    }

    /**
     * Get registrationdate
     *
     * @return integer 
     */
    public function getRegistrationdate()
    {
        return $this->registrationdate;
    }

    /**
     * Set styleid
     *
     * @param integer $styleid
     * @return WcfUser
     */
    public function setStyleid($styleid)
    {
        $this->styleid = $styleid;

        return $this;
    }

    /**
     * Get styleid
     *
     * @return integer 
     */
    public function getStyleid()
    {
        return $this->styleid;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     * @return WcfUser
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Get banned
     *
     * @return boolean 
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set banreason
     *
     * @param string $banreason
     * @return WcfUser
     */
    public function setBanreason($banreason)
    {
        $this->banreason = $banreason;

        return $this;
    }

    /**
     * Get banreason
     *
     * @return string 
     */
    public function getBanreason()
    {
        return $this->banreason;
    }

    /**
     * Set activationcode
     *
     * @param integer $activationcode
     * @return WcfUser
     */
    public function setActivationcode($activationcode)
    {
        $this->activationcode = $activationcode;

        return $this;
    }

    /**
     * Get activationcode
     *
     * @return integer 
     */
    public function getActivationcode()
    {
        return $this->activationcode;
    }

    /**
     * Set lastlostpasswordrequesttime
     *
     * @param integer $lastlostpasswordrequesttime
     * @return WcfUser
     */
    public function setLastlostpasswordrequesttime($lastlostpasswordrequesttime)
    {
        $this->lastlostpasswordrequesttime = $lastlostpasswordrequesttime;

        return $this;
    }

    /**
     * Get lastlostpasswordrequesttime
     *
     * @return integer 
     */
    public function getLastlostpasswordrequesttime()
    {
        return $this->lastlostpasswordrequesttime;
    }

    /**
     * Set lostpasswordkey
     *
     * @param string $lostpasswordkey
     * @return WcfUser
     */
    public function setLostpasswordkey($lostpasswordkey)
    {
        $this->lostpasswordkey = $lostpasswordkey;

        return $this;
    }

    /**
     * Get lostpasswordkey
     *
     * @return string 
     */
    public function getLostpasswordkey()
    {
        return $this->lostpasswordkey;
    }

    /**
     * Set lastusernamechange
     *
     * @param integer $lastusernamechange
     * @return WcfUser
     */
    public function setLastusernamechange($lastusernamechange)
    {
        $this->lastusernamechange = $lastusernamechange;

        return $this;
    }

    /**
     * Get lastusernamechange
     *
     * @return integer 
     */
    public function getLastusernamechange()
    {
        return $this->lastusernamechange;
    }

    /**
     * Set newemail
     *
     * @param string $newemail
     * @return WcfUser
     */
    public function setNewemail($newemail)
    {
        $this->newemail = $newemail;

        return $this;
    }

    /**
     * Get newemail
     *
     * @return string 
     */
    public function getNewemail()
    {
        return $this->newemail;
    }

    /**
     * Set oldusername
     *
     * @param string $oldusername
     * @return WcfUser
     */
    public function setOldusername($oldusername)
    {
        $this->oldusername = $oldusername;

        return $this;
    }

    /**
     * Get oldusername
     *
     * @return string 
     */
    public function getOldusername()
    {
        return $this->oldusername;
    }

    /**
     * Set quitstarted
     *
     * @param integer $quitstarted
     * @return WcfUser
     */
    public function setQuitstarted($quitstarted)
    {
        $this->quitstarted = $quitstarted;

        return $this;
    }

    /**
     * Get quitstarted
     *
     * @return integer 
     */
    public function getQuitstarted()
    {
        return $this->quitstarted;
    }

    /**
     * Set reactivationcode
     *
     * @param integer $reactivationcode
     * @return WcfUser
     */
    public function setReactivationcode($reactivationcode)
    {
        $this->reactivationcode = $reactivationcode;

        return $this;
    }

    /**
     * Get reactivationcode
     *
     * @return integer 
     */
    public function getReactivationcode()
    {
        return $this->reactivationcode;
    }

    /**
     * Set registrationipaddress
     *
     * @param string $registrationipaddress
     * @return WcfUser
     */
    public function setRegistrationipaddress($registrationipaddress)
    {
        $this->registrationipaddress = $registrationipaddress;

        return $this;
    }

    /**
     * Get registrationipaddress
     *
     * @return string 
     */
    public function getRegistrationipaddress()
    {
        return $this->registrationipaddress;
    }

    /**
     * Set avatarid
     *
     * @param integer $avatarid
     * @return WcfUser
     */
    public function setAvatarid($avatarid)
    {
        $this->avatarid = $avatarid;

        return $this;
    }

    /**
     * Get avatarid
     *
     * @return integer 
     */
    public function getAvatarid()
    {
        return $this->avatarid;
    }

    /**
     * Set disableavatar
     *
     * @param boolean $disableavatar
     * @return WcfUser
     */
    public function setDisableavatar($disableavatar)
    {
        $this->disableavatar = $disableavatar;

        return $this;
    }

    /**
     * Get disableavatar
     *
     * @return boolean 
     */
    public function getDisableavatar()
    {
        return $this->disableavatar;
    }

    /**
     * Set disableavatarreason
     *
     * @param string $disableavatarreason
     * @return WcfUser
     */
    public function setDisableavatarreason($disableavatarreason)
    {
        $this->disableavatarreason = $disableavatarreason;

        return $this;
    }

    /**
     * Get disableavatarreason
     *
     * @return string 
     */
    public function getDisableavatarreason()
    {
        return $this->disableavatarreason;
    }

    /**
     * Set enablegravatar
     *
     * @param boolean $enablegravatar
     * @return WcfUser
     */
    public function setEnablegravatar($enablegravatar)
    {
        $this->enablegravatar = $enablegravatar;

        return $this;
    }

    /**
     * Get enablegravatar
     *
     * @return boolean 
     */
    public function getEnablegravatar()
    {
        return $this->enablegravatar;
    }

    /**
     * Set signature
     *
     * @param string $signature
     * @return WcfUser
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string 
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set signatureenablebbcodes
     *
     * @param boolean $signatureenablebbcodes
     * @return WcfUser
     */
    public function setSignatureenablebbcodes($signatureenablebbcodes)
    {
        $this->signatureenablebbcodes = $signatureenablebbcodes;

        return $this;
    }

    /**
     * Get signatureenablebbcodes
     *
     * @return boolean 
     */
    public function getSignatureenablebbcodes()
    {
        return $this->signatureenablebbcodes;
    }

    /**
     * Set signatureenablehtml
     *
     * @param boolean $signatureenablehtml
     * @return WcfUser
     */
    public function setSignatureenablehtml($signatureenablehtml)
    {
        $this->signatureenablehtml = $signatureenablehtml;

        return $this;
    }

    /**
     * Get signatureenablehtml
     *
     * @return boolean 
     */
    public function getSignatureenablehtml()
    {
        return $this->signatureenablehtml;
    }

    /**
     * Set signatureenablesmilies
     *
     * @param boolean $signatureenablesmilies
     * @return WcfUser
     */
    public function setSignatureenablesmilies($signatureenablesmilies)
    {
        $this->signatureenablesmilies = $signatureenablesmilies;

        return $this;
    }

    /**
     * Get signatureenablesmilies
     *
     * @return boolean 
     */
    public function getSignatureenablesmilies()
    {
        return $this->signatureenablesmilies;
    }

    /**
     * Set disablesignature
     *
     * @param boolean $disablesignature
     * @return WcfUser
     */
    public function setDisablesignature($disablesignature)
    {
        $this->disablesignature = $disablesignature;

        return $this;
    }

    /**
     * Get disablesignature
     *
     * @return boolean 
     */
    public function getDisablesignature()
    {
        return $this->disablesignature;
    }

    /**
     * Set disablesignaturereason
     *
     * @param string $disablesignaturereason
     * @return WcfUser
     */
    public function setDisablesignaturereason($disablesignaturereason)
    {
        $this->disablesignaturereason = $disablesignaturereason;

        return $this;
    }

    /**
     * Get disablesignaturereason
     *
     * @return string 
     */
    public function getDisablesignaturereason()
    {
        return $this->disablesignaturereason;
    }

    /**
     * Set lastactivitytime
     *
     * @param integer $lastactivitytime
     * @return WcfUser
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
     * Set profilehits
     *
     * @param integer $profilehits
     * @return WcfUser
     */
    public function setProfilehits($profilehits)
    {
        $this->profilehits = $profilehits;

        return $this;
    }

    /**
     * Get profilehits
     *
     * @return integer 
     */
    public function getProfilehits()
    {
        return $this->profilehits;
    }

    /**
     * Set rankid
     *
     * @param integer $rankid
     * @return WcfUser
     */
    public function setRankid($rankid)
    {
        $this->rankid = $rankid;

        return $this;
    }

    /**
     * Get rankid
     *
     * @return integer 
     */
    public function getRankid()
    {
        return $this->rankid;
    }

    /**
     * Set usertitle
     *
     * @param string $usertitle
     * @return WcfUser
     */
    public function setUsertitle($usertitle)
    {
        $this->usertitle = $usertitle;

        return $this;
    }

    /**
     * Get usertitle
     *
     * @return string 
     */
    public function getUsertitle()
    {
        return $this->usertitle;
    }

    /**
     * Set useronlinegroupid
     *
     * @param integer $useronlinegroupid
     * @return WcfUser
     */
    public function setUseronlinegroupid($useronlinegroupid)
    {
        $this->useronlinegroupid = $useronlinegroupid;

        return $this;
    }

    /**
     * Get useronlinegroupid
     *
     * @return integer 
     */
    public function getUseronlinegroupid()
    {
        return $this->useronlinegroupid;
    }

    /**
     * Set activitypoints
     *
     * @param integer $activitypoints
     * @return WcfUser
     */
    public function setActivitypoints($activitypoints)
    {
        $this->activitypoints = $activitypoints;

        return $this;
    }

    /**
     * Get activitypoints
     *
     * @return integer 
     */
    public function getActivitypoints()
    {
        return $this->activitypoints;
    }

    /**
     * Set notificationmailtoken
     *
     * @param string $notificationmailtoken
     * @return WcfUser
     */
    public function setNotificationmailtoken($notificationmailtoken)
    {
        $this->notificationmailtoken = $notificationmailtoken;

        return $this;
    }

    /**
     * Get notificationmailtoken
     *
     * @return string 
     */
    public function getNotificationmailtoken()
    {
        return $this->notificationmailtoken;
    }

    /**
     * Set authdata
     *
     * @param string $authdata
     * @return WcfUser
     */
    public function setAuthdata($authdata)
    {
        $this->authdata = $authdata;

        return $this;
    }

    /**
     * Get authdata
     *
     * @return string 
     */
    public function getAuthdata()
    {
        return $this->authdata;
    }

    /**
     * Set likesreceived
     *
     * @param integer $likesreceived
     * @return WcfUser
     */
    public function setLikesreceived($likesreceived)
    {
        $this->likesreceived = $likesreceived;

        return $this;
    }

    /**
     * Get likesreceived
     *
     * @return integer 
     */
    public function getLikesreceived()
    {
        return $this->likesreceived;
    }

    /**
     * Set blogentries
     *
     * @param integer $blogentries
     * @return WcfUser
     */
    public function setBlogentries($blogentries)
    {
        $this->blogentries = $blogentries;

        return $this;
    }

    /**
     * Get blogentries
     *
     * @return integer 
     */
    public function getBlogentries()
    {
        return $this->blogentries;
    }

    /**
     * Set wbbposts
     *
     * @param integer $wbbposts
     * @return WcfUser
     */
    public function setWbbposts($wbbposts)
    {
        $this->wbbposts = $wbbposts;

        return $this;
    }

    /**
     * Get wbbposts
     *
     * @return integer 
     */
    public function getWbbposts()
    {
        return $this->wbbposts;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groupid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add groupid
     *
     * @param WcfUserGroup $groupid
     * @return WcfUser
     */
    public function addGroupid(WcfUserGroup $groupid)
    {
        $this->groupid[] = $groupid;

        return $this;
    }

    /**
     * Remove groupid
     *
     * @param WcfUserGroup $groupid
     */
    public function removeGroupid(WcfUserGroup $groupid)
    {
        $this->groupid->removeElement($groupid);
    }

    /**
     * Get groupid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * String representation of object
     *
     * @link  http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->userid,
            $this->username,
            $this->password,
        ));
    }

    /**
     * Constructs the object
     *
     * @link  http://php.net/manual/en/serializable.unserialize.php
     *
     * @param string $serialized <p>
     *                           The string representation of the object.
     *                           </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list(
            $this->userid,
            $this->username,
            $this->password
        ) = unserialize($serialized);
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        // @todo map forum roles to symfony roles
        return array('ROLE_WCF');
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {

    }
}
