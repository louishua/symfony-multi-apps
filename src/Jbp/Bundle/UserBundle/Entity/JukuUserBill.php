<?php

namespace Jbp\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JukuUserBill
 *
 * @ORM\Table(name="juku_user_bill")
 * @ORM\Entity
 */
class JukuUserBill
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
     * @ORM\Column(name="shop_id", type="bigint", nullable=false)
     */
    private $shopId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_type", type="boolean", nullable=false)
     */
    private $userType = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="paytype", type="boolean", nullable=false)
     */
    private $paytype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="success_time", type="integer", nullable=false)
     */
    private $successTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sequence_no", type="string", length=28, nullable=false)
     */
    private $sequenceNo;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", length=255, nullable=false)
     */
    private $detail;

    /**
     * @var string
     *
     * @ORM\Column(name="detail_extra", type="string", length=100, nullable=true)
     */
    private $detailExtra = '';

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $amount = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_del", type="boolean", nullable=false)
     */
    private $isDel;

    /**
     * @var string
     *
     * @ORM\Column(name="target_id", type="string", length=32, nullable=false)
     */
    private $targetId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="balance", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $balance = '0.00';



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
     * @return JukuUserBill
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
     * Set shopId
     *
     * @param integer $shopId
     *
     * @return JukuUserBill
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
     * @return JukuUserBill
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
     * Set type
     *
     * @param boolean $type
     *
     * @return JukuUserBill
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
     * Set paytype
     *
     * @param boolean $paytype
     *
     * @return JukuUserBill
     */
    public function setPaytype($paytype)
    {
        $this->paytype = $paytype;

        return $this;
    }

    /**
     * Get paytype
     *
     * @return boolean
     */
    public function getPaytype()
    {
        return $this->paytype;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     *
     * @return JukuUserBill
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
     * Set successTime
     *
     * @param integer $successTime
     *
     * @return JukuUserBill
     */
    public function setSuccessTime($successTime)
    {
        $this->successTime = $successTime;

        return $this;
    }

    /**
     * Get successTime
     *
     * @return integer
     */
    public function getSuccessTime()
    {
        return $this->successTime;
    }

    /**
     * Set sequenceNo
     *
     * @param string $sequenceNo
     *
     * @return JukuUserBill
     */
    public function setSequenceNo($sequenceNo)
    {
        $this->sequenceNo = $sequenceNo;

        return $this;
    }

    /**
     * Get sequenceNo
     *
     * @return string
     */
    public function getSequenceNo()
    {
        return $this->sequenceNo;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return JukuUserBill
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set detailExtra
     *
     * @param string $detailExtra
     *
     * @return JukuUserBill
     */
    public function setDetailExtra($detailExtra)
    {
        $this->detailExtra = $detailExtra;

        return $this;
    }

    /**
     * Get detailExtra
     *
     * @return string
     */
    public function getDetailExtra()
    {
        return $this->detailExtra;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return JukuUserBill
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
     * Set status
     *
     * @param boolean $status
     *
     * @return JukuUserBill
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
     * Set isDel
     *
     * @param boolean $isDel
     *
     * @return JukuUserBill
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
     * Set targetId
     *
     * @param string $targetId
     *
     * @return JukuUserBill
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;

        return $this;
    }

    /**
     * Get targetId
     *
     * @return string
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return JukuUserBill
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }
}
