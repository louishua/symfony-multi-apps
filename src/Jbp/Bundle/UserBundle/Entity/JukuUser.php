<?php

namespace Jbp\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JukuUser
 *
 * @ORM\Table(name="juku_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNI_USER_USERNAME", columns={"username", "type", "shop_id"})})
 * @ORM\Entity
 */
class JukuUser
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=14, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=6, nullable=false)
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="create_time", type="integer", nullable=false)
     */
    private $createTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="update_time", type="integer", nullable=false)
     */
    private $updateTime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_del", type="boolean", nullable=false)
     */
    private $isDel = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="register_ip", type="integer", nullable=false)
     */
    private $registerIp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="shop_id", type="bigint", nullable=false)
     */
    private $shopId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="auth_key", type="string", length=32, nullable=false)
     */
    private $authKey;

    /**
     * @var string
     *
     * @ORM\Column(name="wechat_openid", type="string", length=150, nullable=false)
     */
    private $wechatOpenid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wechat_unionid", type="string", length=150, nullable=false)
     */
    private $wechatUnionid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wechat_open_openid", type="string", length=150, nullable=false)
     */
    private $wechatOpenOpenid = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="version", type="boolean", nullable=false)
     */
    private $version = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mobile", type="string", length=11, nullable=false)
     */
    private $mobile = '';



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
     * Set username
     *
     * @param string $username
     *
     * @return JukuUser
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
     * Set password
     *
     * @param string $password
     *
     * @return JukuUser
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
     * Set salt
     *
     * @param string $salt
     *
     * @return JukuUser
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return JukuUser
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return JukuUser
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param integer $updateTime
     *
     * @return JukuUser
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return integer
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set isDel
     *
     * @param boolean $isDel
     *
     * @return JukuUser
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return boolean
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return JukuUser
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set registerIp
     *
     * @param integer $registerIp
     *
     * @return JukuUser
     */
    public function setRegisterIp($registerIp)
    {
        $this->registerIp = $registerIp;

        return $this;
    }

    /**
     * Get registerIp
     *
     * @return integer
     */
    public function getRegisterIp()
    {
        return $this->registerIp;
    }

    /**
     * Set shopId
     *
     * @param integer $shopId
     *
     * @return JukuUser
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;

        return $this;
    }

    /**
     * Get shopId
     *
     * @return integer
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * Set authKey
     *
     * @param string $authKey
     *
     * @return JukuUser
     */
    public function setAuthKey($authKey)
    {
        $this->authKey = $authKey;

        return $this;
    }

    /**
     * Get authKey
     *
     * @return string
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * Set wechatOpenid
     *
     * @param string $wechatOpenid
     *
     * @return JukuUser
     */
    public function setWechatOpenid($wechatOpenid)
    {
        $this->wechatOpenid = $wechatOpenid;

        return $this;
    }

    /**
     * Get wechatOpenid
     *
     * @return string
     */
    public function getWechatOpenid()
    {
        return $this->wechatOpenid;
    }

    /**
     * Set wechatUnionid
     *
     * @param string $wechatUnionid
     *
     * @return JukuUser
     */
    public function setWechatUnionid($wechatUnionid)
    {
        $this->wechatUnionid = $wechatUnionid;

        return $this;
    }

    /**
     * Get wechatUnionid
     *
     * @return string
     */
    public function getWechatUnionid()
    {
        return $this->wechatUnionid;
    }

    /**
     * Set wechatOpenOpenid
     *
     * @param string $wechatOpenOpenid
     *
     * @return JukuUser
     */
    public function setWechatOpenOpenid($wechatOpenOpenid)
    {
        $this->wechatOpenOpenid = $wechatOpenOpenid;

        return $this;
    }

    /**
     * Get wechatOpenOpenid
     *
     * @return string
     */
    public function getWechatOpenOpenid()
    {
        return $this->wechatOpenOpenid;
    }

    /**
     * Set version
     *
     * @param boolean $version
     *
     * @return JukuUser
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return boolean
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set mobile
     *
     * @param boolean $mobile
     *
     * @return JukuUser
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return boolean
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
