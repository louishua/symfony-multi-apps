<?php

namespace Jbp\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JukuUserProfile
 *
 * @ORM\Table(name="juku_user_profile")
 * @ORM\Entity
 */
class JukuUserProfile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="bigint", nullable=false)
     */
    private $sid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_type", type="boolean", nullable=false)
     */
    private $userType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nicename", type="string", length=10, nullable=false)
     */
    private $nicename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=60, nullable=false)
     */
    private $avatar = '';

    /**
     * @var string
     *
     * @ORM\Column(name="avatar_ext", type="string", length=6, nullable=true)
     */
    private $avatarExt;

    /**
     * @var string
     *
     * @ORM\Column(name="realname", type="string", length=10, nullable=false)
     */
    private $realname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $gender = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="qq", type="string", length=11, nullable=false)
     */
    private $qq = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wechat", type="string", length=30, nullable=false)
     */
    private $wechat = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="jpb_enabled", type="boolean", nullable=false)
     */
    private $jpbEnabled = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pay_password", type="string", length=32, nullable=false)
     */
    private $payPassword = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pay_salt", type="string", length=6, nullable=false)
     */
    private $paySalt = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_login_time", type="integer", nullable=false)
     */
    private $lastLoginTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_login_ip", type="integer", nullable=false)
     */
    private $lastLoginIp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="login_times", type="integer", nullable=false)
     */
    private $loginTimes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="withdraw_account", type="string", length=30, nullable=false)
     */
    private $withdrawAccount = '';

    /**
     * @var string
     *
     * @ORM\Column(name="withdraw_owner", type="string", length=10, nullable=false)
     */
    private $withdrawOwner = '';

    /**
     * @var string
     *
     * @ORM\Column(name="withdraw_bank_name", type="string", length=20, nullable=false)
     */
    private $withdrawBankName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="withdraw_bank_addr", type="string", length=100, nullable=false)
     */
    private $withdrawBankAddr = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="withdraw_method", type="boolean", nullable=false)
     */
    private $withdrawMethod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=11, nullable=false)
     */
    private $mobile = '';

    /**
     * @var string
     *
     * @ORM\Column(name="weibo", type="string", length=40, nullable=false)
     */
    private $weibo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="birthday", type="integer", nullable=false)
     */
    private $birthday = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=6, nullable=false)
     */
    private $zipcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=false)
     */
    private $address = '';



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return JukuUserProfile
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

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
