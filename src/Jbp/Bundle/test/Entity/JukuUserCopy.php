<?php

namespace Jbp\Bundle\UserBundle\Entity;

/**
 * JukuUserCopy
 */
class JukuUserCopy
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var string
     */
    private $salt;

    /**
     * @var boolean
     */
    private $type = '0';

    /**
     * @var integer
     */
    private $createTime = '0';

    /**
     * @var integer
     */
    private $updateTime = '0';

    /**
     * @var boolean
     */
    private $isDel = '0';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $registerIp = '0';

    /**
     * @var integer
     */
    private $shopId = '0';

    /**
     * @var string
     */
    private $authKey;

    /**
     * @var string
     */
    private $wechatOpenid = '';


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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
     * @return JukuUserCopy
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
}

