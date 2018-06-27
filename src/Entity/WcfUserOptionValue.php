<?php

namespace xanily\WCFSessionsAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WcfUserOptionValue
 *
 * @ORM\Table(name="user_option_value")
 * @ORM\MappedSuperclass
 */
class WcfUserOptionValue
{
    /**
     * @var string
     *
     * @ORM\Column(name="userOption1", type="text", length=65535, nullable=true)
     */
    private $aboutMe;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption2", type="string", length=10, nullable=false)
     */
    private $birthday;

    /**
     * @var boolean
     *
     * @ORM\Column(name="userOption3", type="boolean", nullable=false)
     */
    private $showYearOfBirth = false;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption4", type="text", length=65535, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption5", type="text", length=65535, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption6", type="text", length=65535, nullable=true)
     */
    private $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption7", type="text", length=65535, nullable=true)
     */
    private $hobbies;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption8", type="text", length=16777215, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption9", type="text", length=65535, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption10", type="text", length=65535, nullable=true)
     */
    private $icq;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption11", type="text", length=65535, nullable=true)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption12", type="text", length=65535, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption13", type="text", length=65535, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption14", type="text", length=65535, nullable=true)
     */
    private $googlePlus;

    /**
     * @var integer
     *
     * @ORM\Column(name="userID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

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
     * Set aboutMe
     *
     * @param string $aboutMe
     * @return WcfUserOptionValue
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;

        return $this;
    }

    /**
     * Get aboutMe
     *
     * @return string
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * Set birthday
     *
     * @param string $birthday
     * @return WcfUserOptionValue
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set showYearOfBirth
     *
     * @param boolean $showYearOfBirth
     * @return WcfUserOptionValue
     */
    public function setShowYearOfBirth($showYearOfBirth)
    {
        $this->showYearOfBirth = $showYearOfBirth;

        return $this;
    }

    /**
     * Get showYearOfBirth
     *
     * @return boolean
     */
    public function getShowYearOfBirth()
    {
        return $this->showYearOfBirth;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return WcfUserOptionValue
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return WcfUserOptionValue
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set occupation
     *
     * @param string $occupation
     * @return WcfUserOptionValue
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set hobbies
     *
     * @param string $hobbies
     * @return WcfUserOptionValue
     */
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    /**
     * Get hobbies
     *
     * @return string
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return WcfUserOptionValue
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return WcfUserOptionValue
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set icq
     *
     * @param string $icq
     * @return WcfUserOptionValue
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;

        return $this;
    }

    /**
     * Get icq
     *
     * @return string
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return WcfUserOptionValue
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return WcfUserOptionValue
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return WcfUserOptionValue
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set googlePlus
     *
     * @param string $googlePlus
     * @return WcfUserOptionValue
     */
    public function setGooglePlus($googlePlus)
    {
        $this->googlePlus = $googlePlus;

        return $this;
    }

    /**
     * Get googlePlus
     *
     * @return string
     */
    public function getGooglePlus()
    {
        return $this->googlePlus;
    }

 }
