<?php

namespace Jbp\Bundle\UserBundle\Entity;

/**
 * JukuUserProfile
 */
class JukuUserProfile
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $sid = '0';

    /**
     * @var boolean
     */
    private $userType = '0';

    /**
     * @var string
     */
    private $nicename = '';

    /**
     * @var string
     */
    private $avatar = '';

    /**
     * @var string
     */
    private $avatarExt;

    /**
     * @var string
     */
    private $realname = '';

    /**
     * @var boolean
     */
    private $gender = '0';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $qq = '';

    /**
     * @var string
     */
    private $wechat = '';

    /**
     * @var boolean
     */
    private $jpbEnabled = '0';

    /**
     * @var string
     */
    private $payPassword = '';

    /**
     * @var string
     */
    private $paySalt = '';

    /**
     * @var integer
     */
    private $lastLoginTime = '0';

    /**
     * @var integer
     */
    private $lastLoginIp = '0';

    /**
     * @var integer
     */
    private $loginTimes = '0';

    /**
     * @var string
     */
    private $withdrawAccount = '';

    /**
     * @var string
     */
    private $withdrawOwner = '';

    /**
     * @var string
     */
    private $withdrawBankName = '';

    /**
     * @var string
     */
    private $withdrawBankAddr = '';

    /**
     * @var boolean
     */
    private $withdrawMethod = '0';

    /**
     * @var string
     */
    private $mobile = '';

    /**
     * @var string
     */
    private $weibo = '';

    /**
     * @var integer
     */
    private $birthday = '0';

    /**
     * @var string
     */
    private $zipcode = '';

    /**
     * @var string
     */
    private $address = '';


    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set sid
     *
     * @param integer $sid
     *
     * @return JukuUserProfile
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return integer
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set userType
     *
     * @param boolean $userType
     *
     * @return JukuUserProfile
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return boolean
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set nicename
     *
     * @param string $nicename
     *
     * @return JukuUserProfile
     */
    public function setNicename($nicename)
    {
        $this->nicename = $nicename;

        return $this;
    }

    /**
     * Get nicename
     *
     * @return string
     */
    public function getNicename()
    {
        return $this->nicename;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return JukuUserProfile
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set avatarExt
     *
     * @param string $avatarExt
     *
     * @return JukuUserProfile
     */
    public function setAvatarExt($avatarExt)
    {
        $this->avatarExt = $avatarExt;

        return $this;
    }

    /**
     * Get avatarExt
     *
     * @return string
     */
    public function getAvatarExt()
    {
        return $this->avatarExt;
    }

    /**
     * Set realname
     *
     * @param string $realname
     *
     * @return JukuUserProfile
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;

        return $this;
    }

    /**
     * Get realname
     *
     * @return string
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     *
     * @return JukuUserProfile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return JukuUserProfile
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
     * Set qq
     *
     * @param string $qq
     *
     * @return JukuUserProfile
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set wechat
     *
     * @param string $wechat
     *
     * @return JukuUserProfile
     */
    public function setWechat($wechat)
    {
        $this->wechat = $wechat;

        return $this;
    }

    /**
     * Get wechat
     *
     * @return string
     */
    public function getWechat()
    {
        return $this->wechat;
    }

    /**
     * Set jpbEnabled
     *
     * @param boolean $jpbEnabled
     *
     * @return JukuUserProfile
     */
    public function setJpbEnabled($jpbEnabled)
    {
        $this->jpbEnabled = $jpbEnabled;

        return $this;
    }

    /**
     * Get jpbEnabled
     *
     * @return boolean
     */
    public function getJpbEnabled()
    {
        return $this->jpbEnabled;
    }

    /**
     * Set payPassword
     *
     * @param string $payPassword
     *
     * @return JukuUserProfile
     */
    public function setPayPassword($payPassword)
    {
        $this->payPassword = $payPassword;

        return $this;
    }

    /**
     * Get payPassword
     *
     * @return string
     */
    public function getPayPassword()
    {
        return $this->payPassword;
    }

    /**
     * Set paySalt
     *
     * @param string $paySalt
     *
     * @return JukuUserProfile
     */
    public function setPaySalt($paySalt)
    {
        $this->paySalt = $paySalt;

        return $this;
    }

    /**
     * Get paySalt
     *
     * @return string
     */
    public function getPaySalt()
    {
        return $this->paySalt;
    }

    /**
     * Set lastLoginTime
     *
     * @param integer $lastLoginTime
     *
     * @return JukuUserProfile
     */
    public function setLastLoginTime($lastLoginTime)
    {
        $this->lastLoginTime = $lastLoginTime;

        return $this;
    }

    /**
     * Get lastLoginTime
     *
     * @return integer
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

    /**
     * Set lastLoginIp
     *
     * @param integer $lastLoginIp
     *
     * @return JukuUserProfile
     */
    public function setLastLoginIp($lastLoginIp)
    {
        $this->lastLoginIp = $lastLoginIp;

        return $this;
    }

    /**
     * Get lastLoginIp
     *
     * @return integer
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * Set loginTimes
     *
     * @param integer $loginTimes
     *
     * @return JukuUserProfile
     */
    public function setLoginTimes($loginTimes)
    {
        $this->loginTimes = $loginTimes;

        return $this;
    }

    /**
     * Get loginTimes
     *
     * @return integer
     */
    public function getLoginTimes()
    {
        return $this->loginTimes;
    }

    /**
     * Set withdrawAccount
     *
     * @param string $withdrawAccount
     *
     * @return JukuUserProfile
     */
    public function setWithdrawAccount($withdrawAccount)
    {
        $this->withdrawAccount = $withdrawAccount;

        return $this;
    }

    /**
     * Get withdrawAccount
     *
     * @return string
     */
    public function getWithdrawAccount()
    {
        return $this->withdrawAccount;
    }

    /**
     * Set withdrawOwner
     *
     * @param string $withdrawOwner
     *
     * @return JukuUserProfile
     */
    public function setWithdrawOwner($withdrawOwner)
    {
        $this->withdrawOwner = $withdrawOwner;

        return $this;
    }

    /**
     * Get withdrawOwner
     *
     * @return string
     */
    public function getWithdrawOwner()
    {
        return $this->withdrawOwner;
    }

    /**
     * Set withdrawBankName
     *
     * @param string $withdrawBankName
     *
     * @return JukuUserProfile
     */
    public function setWithdrawBankName($withdrawBankName)
    {
        $this->withdrawBankName = $withdrawBankName;

        return $this;
    }

    /**
     * Get withdrawBankName
     *
     * @return string
     */
    public function getWithdrawBankName()
    {
        return $this->withdrawBankName;
    }

    /**
     * Set withdrawBankAddr
     *
     * @param string $withdrawBankAddr
     *
     * @return JukuUserProfile
     */
    public function setWithdrawBankAddr($withdrawBankAddr)
    {
        $this->withdrawBankAddr = $withdrawBankAddr;

        return $this;
    }

    /**
     * Get withdrawBankAddr
     *
     * @return string
     */
    public function getWithdrawBankAddr()
    {
        return $this->withdrawBankAddr;
    }

    /**
     * Set withdrawMethod
     *
     * @param boolean $withdrawMethod
     *
     * @return JukuUserProfile
     */
    public function setWithdrawMethod($withdrawMethod)
    {
        $this->withdrawMethod = $withdrawMethod;

        return $this;
    }

    /**
     * Get withdrawMethod
     *
     * @return boolean
     */
    public function getWithdrawMethod()
    {
        return $this->withdrawMethod;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return JukuUserProfile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set weibo
     *
     * @param string $weibo
     *
     * @return JukuUserProfile
     */
    public function setWeibo($weibo)
    {
        $this->weibo = $weibo;

        return $this;
    }

    /**
     * Get weibo
     *
     * @return string
     */
    public function getWeibo()
    {
        return $this->weibo;
    }

    /**
     * Set birthday
     *
     * @param integer $birthday
     *
     * @return JukuUserProfile
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return integer
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return JukuUserProfile
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return JukuUserProfile
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
}

