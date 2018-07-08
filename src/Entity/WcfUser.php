<?php

namespace xanily\WCFSessionsAuthBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class WcfUser
 * @package xanily\WCFSessionsAuthBundle\Entity
 * @ORM\Entity(readOnly=true)
 * @ORM\Table(name="user")
 */
class WcfUser implements UserInterface
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="userID", type="integer")
     */
    private $userID;

    /**
     * @var string
     * @ORM\Column(name="username", type="string")
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="password", type="string")
     */
    private $password;

    /**
     * @var string
     * @ORM\Column(name="accessToken", type="string")
     */
    private $accessToken;

    /**
     * @var integer
     * @ORM\Column(name="languageID", type="integer")
     */
    private $languageID;

    /**
     * @var integer
     * @ORM\Column(name="registrationDate", type="integer")
     */
    private $registrationDate;

    /**
     * @var integer
     * @ORM\Column(name="styleID", type="integer")
     */
    private $styleID;

    /**
     * @var boolean
     * @ORM\Column(name="banned", type="boolean")
     */
    private $banned;

    /**
     * @var string
     * @ORM\Column(name="banReason", type="string")
     */
    private $banReason;

    /**
     * @var integer
     * @ORM\Column(name="banExpires", type="integer")
     */
    private $banExpires;

    /**
     * @var integer
     * @ORM\Column(name="activationCode", type="integer")
     */
    private $activationCode;

    /**
     * @var integer
     * @ORM\Column(name="lastLostPasswordRequestTime", type="integer")
     */
    private $lastLostPasswordRequestTime;

    /**
     * @var string
     * @ORM\Column(name="lostPasswordKey", type="string")
     */
    private $lostPasswordKey;

    /**
     * @var integer
     * @ORM\Column(name="lastUsernameChange", type="integer")
     */
    private $lastUsernameChange;

    /**
     * @var string
     * @ORM\Column(name="newEmail", type="string")
     */
    private $newEmail;

    /**
     * @var string
     * @ORM\Column(name="oldUsername", type="string")
     */
    private $oldUsername;

    /**
     * @var integer
     * @ORM\Column(name="quitStarted", type="integer")
     */
    private $quitStarted;

    /**
     * @var integer
     * @ORM\Column(name="reactivationCode", type="integer")
     */
    private $reactivationCode;

    /**
     * @var string
     * @ORM\Column(name="registrationIpAddress", type="string")
     */
    private $registrationIpAddress;

    /**
     * @var integer
     * @ORM\Column(name="avatarID", type="integer")
     */
    private $avatarID;

    /**
     * @var boolean
     * @ORM\Column(name="disableAvatar", type="boolean")
     */
    private $disableAvatar;

    /**
     * @var string
     * @ORM\Column(name="disableAvatarReason", type="string")
     */
    private $disableAvatarReason;

    /**
     * @var integer
     * @ORM\Column(name="disableAvatarExpires", type="integer")
     */
    private $disableAvatarExpires;

    /**
     * @var boolean
     * @ORM\Column(name="enableGravatar", type="boolean")
     */
    private $enableGravatar;

    /**
     * @var string
     * @ORM\Column(name="gravatarFileExtension", type="string")
     */
    private $gravatarFileExtension;

    /**
     * @var string
     * @ORM\Column(name="signature", type="string")
     */
    private $signature;

    /**
     * @var boolean
     * @ORM\Column(name="signatureEnableHtml", type="boolean")
     */
    private $signatureEnableHtml;

    /**
     * @var boolean
     * @ORM\Column(name="disableSignature", type="boolean")
     */
    private $disableSignature;

    /**
     * @var string
     * @ORM\Column(name="disableSignatureReason", type="string")
     */
    private $disableSignatureReason;

    /**
     * @var integer
     * @ORM\Column(name="disableSignatureExpires", type="integer")
     */
    private $disableSignatureExpires;

    /**
     * @var integer
     * @ORM\Column(name="lastActivityTime", type="integer")
     */
    private $lastActivityTime;

    /**
     * @var integer
     * @ORM\Column(name="profileHits", type="integer")
     */
    private $profileHits;

    /**
     * @var integer
     * @ORM\Column(name="rankID", type="integer")
     */
    private $rankID;

    /**
     * @var string
     * @ORM\Column(name="userTitle", type="string")
     */
    private $userTitle;

    /**
     * @var integer
     * @ORM\Column(name="userOnlineGroupID", type="integer")
     */
    private $userOnlineGroupID;

    /**
     * @var integer
     * @ORM\Column(name="activityPoints", type="integer")
     */
    private $activityPoints;

    /**
     * @var string
     * @ORM\Column(name="notificationMailToken", type="string")
     */
    private $notificationMailToken;

    /**
     * @var string
     * @ORM\Column(name="authData", type="string")
     */
    private $authData;

    /**
     * @var integer
     * @ORM\Column(name="likesReceived", type="integer")
     */
    private $likesReceived;

    /**
     * @var integer
     * @ORM\Column(name="trophyPoints", type="integer")
     */
    private $trophyPoints;

    /**
     * @var string
     * @ORM\Column(name="coverPhotoHash", type="string")
     */
    private $coverPhotoHash;

    /**
     * @var string
     * @ORM\Column(name="coverPhotoExtension", type="string")
     */
    private $coverPhotoExtension;

    /**
     * @var boolean
     * @ORM\Column(name="disableCoverPhoto", type="boolean")
     */
    private $disableCoverPhoto;

    /**
     * @var string
     * @ORM\Column(name="disableCoverPhotoReason", type="string")
     */
    private $disableCoverPhotoReason;

    /**
     * @var integer
     * @ORM\Column(name="disableCoverPhotoExpires", type="integer")
     */
    private $disableCoverPhotoExpires;

    /**
     * @var integer
     * @ORM\Column(name="wbbPosts", type="integer")
     */
    private $wbbPosts;

    /**
     * @var array
     */
    private $roles = [];

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="WcfUserGroup", mappedBy="user")
     */
    private $groups;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="WcfSession", mappedBy="user")
     */
    private $sessions;

    public function __construct()
    {
        $this->groups = new ArrayCollection();
        $this->sessions = new ArrayCollection();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->userID;
    }

    /**
     * @param integer $userId
     * @return WcfUser
     */
    public function setId($userId)
    {
        $this->userID = $userId;
        return $this;
    }

    /**
     * @return string
     */

    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string
     * @return WcfUser
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return WcfUser
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return WcfUser
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return WcfUser
     */
    public function setAccessToken(string $accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return int
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * @param int $languageID
     * @return WcfUser
     */
    public function setLanguageID(int $languageID)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param int $registrationDate
     * @return WcfUser
     */
    public function setRegistrationDate(int $registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getStyleID()
    {
        return $this->styleID;
    }

    /**
     * @param int $styleID
     * @return WcfUser
     */
    public function setStyleID(int $styleID)
    {
        $this->styleID = $styleID;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBanned()
    {
        return $this->banned;
    }

    /**
     * @param bool $banned
     * @return WcfUser
     */
    public function setBanned(bool $banned)
    {
        $this->banned = $banned;
        return $this;
    }

    /**
     * @return string
     */
    public function getBanReason()
    {
        return $this->banReason;
    }

    /**
     * @param string $banReason
     * @return WcfUser
     */
    public function setBanReason(string $banReason)
    {
        $this->banReason = $banReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getBanExpires()
    {
        return $this->banExpires;
    }

    /**
     * @param int $banExpires
     * @return WcfUser
     */
    public function setBanExpires(int $banExpires)
    {
        $this->banExpires = $banExpires;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivationCode()
    {
        return $this->activationCode;
    }

    /**
     * @param int $activationCode
     * @return WcfUser
     */
    public function setActivationCode(int $activationCode)
    {
        $this->activationCode = $activationCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastLostPasswordRequestTime()
    {
        return $this->lastLostPasswordRequestTime;
    }

    /**
     * @param int $lastLostPasswordRequestTime
     * @return WcfUser
     */
    public function setLastLostPasswordRequestTime(int $lastLostPasswordRequestTime)
    {
        $this->lastLostPasswordRequestTime = $lastLostPasswordRequestTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getLostPasswordKey()
    {
        return $this->lostPasswordKey;
    }

    /**
     * @param string $lostPasswordKey
     * @return WcfUser
     */
    public function setLostPasswordKey(string $lostPasswordKey)
    {
        $this->lostPasswordKey = $lostPasswordKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastUsernameChange()
    {
        return $this->lastUsernameChange;
    }

    /**
     * @param int $lastUsernameChange
     * @return WcfUser
     */
    public function setLastUsernameChange(int $lastUsernameChange)
    {
        $this->lastUsernameChange = $lastUsernameChange;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewEmail()
    {
        return $this->newEmail;
    }

    /**
     * @param string $newEmail
     * @return WcfUser
     */
    public function setNewEmail(string $newEmail)
    {
        $this->newEmail = $newEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getOldUsername()
    {
        return $this->oldUsername;
    }

    /**
     * @param string $oldUsername
     * @return WcfUser
     */
    public function setOldUsername(string $oldUsername)
    {
        $this->oldUsername = $oldUsername;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuitStarted()
    {
        return $this->quitStarted;
    }

    /**
     * @param int $quitStarted
     * @return WcfUser
     */
    public function setQuitStarted(int $quitStarted)
    {
        $this->quitStarted = $quitStarted;
        return $this;
    }

    /**
     * @return int
     */
    public function getReactivationCode()
    {
        return $this->reactivationCode;
    }

    /**
     * @param int $reactivationCode
     * @return WcfUser
     */
    public function setReactivationCode(int $reactivationCode)
    {
        $this->reactivationCode = $reactivationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationIpAddress()
    {
        return $this->registrationIpAddress;
    }

    /**
     * @param string $registrationIpAddress
     * @return WcfUser
     */
    public function setRegistrationIpAddress(string $registrationIpAddress)
    {
        $this->registrationIpAddress = $registrationIpAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvatarID()
    {
        return $this->avatarID;
    }

    /**
     * @param int $avatarID
     * @return WcfUser
     */
    public function setAvatarID(int $avatarID)
    {
        $this->avatarID = $avatarID;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableAvatar()
    {
        return $this->disableAvatar;
    }

    /**
     * @param bool $disableAvatar
     * @return WcfUser
     */
    public function setDisableAvatar(bool $disableAvatar)
    {
        $this->disableAvatar = $disableAvatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisableAvatarReason()
    {
        return $this->disableAvatarReason;
    }

    /**
     * @param string $disableAvatarReason
     * @return WcfUser
     */
    public function setDisableAvatarReason(string $disableAvatarReason)
    {
        $this->disableAvatarReason = $disableAvatarReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisableAvatarExpires()
    {
        return $this->disableAvatarExpires;
    }

    /**
     * @param int $disableAvatarExpires
     * @return WcfUser
     */
    public function setDisableAvatarExpires(int $disableAvatarExpires)
    {
        $this->disableAvatarExpires = $disableAvatarExpires;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnableGravatar()
    {
        return $this->enableGravatar;
    }

    /**
     * @param bool $enableGravatar
     * @return WcfUser
     */
    public function setEnableGravatar(bool $enableGravatar)
    {
        $this->enableGravatar = $enableGravatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getGravatarFileExtension()
    {
        return $this->gravatarFileExtension;
    }

    /**
     * @param string $gravatarFileExtension
     * @return WcfUser
     */
    public function setGravatarFileExtension(string $gravatarFileExtension)
    {
        $this->gravatarFileExtension = $gravatarFileExtension;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return WcfUser
     */
    public function setSignature(string $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSignatureEnableHtml()
    {
        return $this->signatureEnableHtml;
    }

    /**
     * @param bool $signatureEnableHtml
     * @return WcfUser
     */
    public function setSignatureEnableHtml(bool $signatureEnableHtml)
    {
        $this->signatureEnableHtml = $signatureEnableHtml;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableSignature()
    {
        return $this->disableSignature;
    }

    /**
     * @param bool $disableSignature
     * @return WcfUser
     */
    public function setDisableSignature(bool $disableSignature)
    {
        $this->disableSignature = $disableSignature;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisableSignatureReason()
    {
        return $this->disableSignatureReason;
    }

    /**
     * @param string $disableSignatureReason
     * @return WcfUser
     */
    public function setDisableSignatureReason(string $disableSignatureReason)
    {
        $this->disableSignatureReason = $disableSignatureReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisableSignatureExpires()
    {
        return $this->disableSignatureExpires;
    }

    /**
     * @param int $disableSignatureExpires
     * @return WcfUser
     */
    public function setDisableSignatureExpires(int $disableSignatureExpires)
    {
        $this->disableSignatureExpires = $disableSignatureExpires;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastActivityTime()
    {
        return $this->lastActivityTime;
    }

    /**
     * @param int $lastActivityTime
     * @return WcfUser
     */
    public function setLastActivityTime(int $lastActivityTime)
    {
        $this->lastActivityTime = $lastActivityTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getProfileHits()
    {
        return $this->profileHits;
    }

    /**
     * @param int $profileHits
     * @return WcfUser
     */
    public function setProfileHits(int $profileHits)
    {
        $this->profileHits = $profileHits;
        return $this;
    }

    /**
     * @return int
     */
    public function getRankID()
    {
        return $this->rankID;
    }

    /**
     * @param int $rankID
     * @return WcfUser
     */
    public function setRankID(int $rankID)
    {
        $this->rankID = $rankID;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }

    /**
     * @param string $userTitle
     * @return WcfUser
     */
    public function setUserTitle(string $userTitle)
    {
        $this->userTitle = $userTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserOnlineGroupID()
    {
        return $this->userOnlineGroupID;
    }

    /**
     * @param int $userOnlineGroupID
     * @return WcfUser
     */
    public function setUserOnlineGroupID(int $userOnlineGroupID)
    {
        $this->userOnlineGroupID = $userOnlineGroupID;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityPoints()
    {
        return $this->activityPoints;
    }

    /**
     * @param int $activityPoints
     * @return WcfUser
     */
    public function setActivityPoints(int $activityPoints)
    {
        $this->activityPoints = $activityPoints;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationMailToken()
    {
        return $this->notificationMailToken;
    }

    /**
     * @param string $notificationMailToken
     * @return WcfUser
     */
    public function setNotificationMailToken(string $notificationMailToken)
    {
        $this->notificationMailToken = $notificationMailToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthData()
    {
        return $this->authData;
    }

    /**
     * @param string $authData
     * @return WcfUser
     */
    public function setAuthData(string $authData)
    {
        $this->authData = $authData;
        return $this;
    }

    /**
     * @return int
     */
    public function getLikesReceived()
    {
        return $this->likesReceived;
    }

    /**
     * @param int $likesReceived
     * @return WcfUser
     */
    public function setLikesReceived(int $likesReceived)
    {
        $this->likesReceived = $likesReceived;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrophyPoints()
    {
        return $this->trophyPoints;
    }

    /**
     * @param int $trophyPoints
     * @return WcfUser
     */
    public function setTrophyPoints(int $trophyPoints)
    {
        $this->trophyPoints = $trophyPoints;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverPhotoHash()
    {
        return $this->coverPhotoHash;
    }

    /**
     * @param string $coverPhotoHash
     * @return WcfUser
     */
    public function setCoverPhotoHash(string $coverPhotoHash)
    {
        $this->coverPhotoHash = $coverPhotoHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverPhotoExtension()
    {
        return $this->coverPhotoExtension;
    }

    /**
     * @param string $coverPhotoExtension
     * @return WcfUser
     */
    public function setCoverPhotoExtension(string $coverPhotoExtension)
    {
        $this->coverPhotoExtension = $coverPhotoExtension;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableCoverPhoto()
    {
        return $this->disableCoverPhoto;
    }

    /**
     * @param bool $disableCoverPhoto
     * @return WcfUser
     */
    public function setDisableCoverPhoto(bool $disableCoverPhoto)
    {
        $this->disableCoverPhoto = $disableCoverPhoto;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisableCoverPhotoReason()
    {
        return $this->disableCoverPhotoReason;
    }

    /**
     * @param string $disableCoverPhotoReason
     * @return WcfUser
     */
    public function setDisableCoverPhotoReason(string $disableCoverPhotoReason)
    {
        $this->disableCoverPhotoReason = $disableCoverPhotoReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisableCoverPhotoExpires()
    {
        return $this->disableCoverPhotoExpires;
    }

    /**
     * @param int $disableCoverPhotoExpires
     * @return WcfUser
     */
    public function setDisableCoverPhotoExpires(int $disableCoverPhotoExpires)
    {
        $this->disableCoverPhotoExpires = $disableCoverPhotoExpires;
        return $this;
    }

    /**
     * @return int
     */
    public function getWbbPosts()
    {
        return $this->wbbPosts;
    }

    /**
     * @param int $wbbPosts
     * @return WcfUser
     */
    public function setWbbPosts(int $wbbPosts)
    {
        $this->wbbPosts = $wbbPosts;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return WcfUser
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param ArrayCollection $groups
     * @return WcfUser
     */
    public function setGroups(ArrayCollection $groups)
    {
        $this->groups = $groups;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * @param ArrayCollection $sessions
     * @return WcfUser
     */
    public function setSessions(ArrayCollection $sessions)
    {
        $this->sessions = $sessions;
        return $this;
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
