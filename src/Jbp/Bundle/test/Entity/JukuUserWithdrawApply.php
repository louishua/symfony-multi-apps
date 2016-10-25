<?php

namespace Jbp\Bundle\UserBundle\Entity;

/**
 * JukuUserWithdrawApply
 */
class JukuUserWithdrawApply
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $wdRealname;

    /**
     * @var boolean
     */
    private $wdMethod = '0';

    /**
     * @var string
     */
    private $wdAccount;

    /**
     * @var string
     */
    private $fee = '0.00';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $dateline = '0';

    /**
     * @var integer
     */
    private $shopId;

    /**
     * @var boolean
     */
    private $userType = '0';

    /**
     * @var integer
     */
    private $auditTime = '0';

    /**
     * @var string
     */
    private $auditMemo = '';


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
     * @return JukuUserWithdrawApply
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
     * Set amount
     *
     * @param string $amount
     *
     * @return JukuUserWithdrawApply
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set wdRealname
     *
     * @param string $wdRealname
     *
     * @return JukuUserWithdrawApply
     */
    public function setWdRealname($wdRealname)
    {
        $this->wdRealname = $wdRealname;

        return $this;
    }

    /**
     * Get wdRealname
     *
     * @return string
     */
    public function getWdRealname()
    {
        return $this->wdRealname;
    }

    /**
     * Set wdMethod
     *
     * @param boolean $wdMethod
     *
     * @return JukuUserWithdrawApply
     */
    public function setWdMethod($wdMethod)
    {
        $this->wdMethod = $wdMethod;

        return $this;
    }

    /**
     * Get wdMethod
     *
     * @return boolean
     */
    public function getWdMethod()
    {
        return $this->wdMethod;
    }

    /**
     * Set wdAccount
     *
     * @param string $wdAccount
     *
     * @return JukuUserWithdrawApply
     */
    public function setWdAccount($wdAccount)
    {
        $this->wdAccount = $wdAccount;

        return $this;
    }

    /**
     * Get wdAccount
     *
     * @return string
     */
    public function getWdAccount()
    {
        return $this->wdAccount;
    }

    /**
     * Set fee
     *
     * @param string $fee
     *
     * @return JukuUserWithdrawApply
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return JukuUserWithdrawApply
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
     * Set dateline
     *
     * @param integer $dateline
     *
     * @return JukuUserWithdrawApply
     */
    public function setDateline($dateline)
    {
        $this->dateline = $dateline;

        return $this;
    }

    /**
     * Get dateline
     *
     * @return integer
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * Set shopId
     *
     * @param integer $shopId
     *
     * @return JukuUserWithdrawApply
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
     * Set userType
     *
     * @param boolean $userType
     *
     * @return JukuUserWithdrawApply
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
     * Set auditTime
     *
     * @param integer $auditTime
     *
     * @return JukuUserWithdrawApply
     */
    public function setAuditTime($auditTime)
    {
        $this->auditTime = $auditTime;

        return $this;
    }

    /**
     * Get auditTime
     *
     * @return integer
     */
    public function getAuditTime()
    {
        return $this->auditTime;
    }

    /**
     * Set auditMemo
     *
     * @param string $auditMemo
     *
     * @return JukuUserWithdrawApply
     */
    public function setAuditMemo($auditMemo)
    {
        $this->auditMemo = $auditMemo;

        return $this;
    }

    /**
     * Get auditMemo
     *
     * @return string
     */
    public function getAuditMemo()
    {
        return $this->auditMemo;
    }
}

