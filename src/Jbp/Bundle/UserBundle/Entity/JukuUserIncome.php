<?php

namespace Jbp\Bundle\UserBundle\Entity;

/**
 * JukuUserIncome
 */
class JukuUserIncome
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $shopId;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $goodsId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $merchantId;

    /**
     * @var string
     */
    private $income = '0.00';

    /**
     * @var boolean
     */
    private $type = '0';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $dateline = '0';

    /**
     * @var string
     */
    private $incomeSn;

    /**
     * @var integer
     */
    private $payTime = '0';

    /**
     * @var integer
     */
    private $endTime = '0';


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
     * Set shopId
     *
     * @param integer $shopId
     *
     * @return JukuUserIncome
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
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return JukuUserIncome
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set goodsId
     *
     * @param integer $goodsId
     *
     * @return JukuUserIncome
     */
    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;

        return $this;
    }

    /**
     * Get goodsId
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goodsId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return JukuUserIncome
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
     * Set merchantId
     *
     * @param integer $merchantId
     *
     * @return JukuUserIncome
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * Get merchantId
     *
     * @return integer
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set income
     *
     * @param string $income
     *
     * @return JukuUserIncome
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income
     *
     * @return string
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return JukuUserIncome
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
     * Set status
     *
     * @param boolean $status
     *
     * @return JukuUserIncome
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
     * @return JukuUserIncome
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
     * Set incomeSn
     *
     * @param string $incomeSn
     *
     * @return JukuUserIncome
     */
    public function setIncomeSn($incomeSn)
    {
        $this->incomeSn = $incomeSn;

        return $this;
    }

    /**
     * Get incomeSn
     *
     * @return string
     */
    public function getIncomeSn()
    {
        return $this->incomeSn;
    }

    /**
     * Set payTime
     *
     * @param integer $payTime
     *
     * @return JukuUserIncome
     */
    public function setPayTime($payTime)
    {
        $this->payTime = $payTime;

        return $this;
    }

    /**
     * Get payTime
     *
     * @return integer
     */
    public function getPayTime()
    {
        return $this->payTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return JukuUserIncome
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
}

