<?php

namespace Jbp\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JukuUserAccount
 *
 * @ORM\Table(name="juku_user_account")
 * @ORM\Entity
 */
class JukuUserAccount
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
     * @ORM\Column(name="point", type="integer", nullable=false)
     */
    private $point = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_type", type="boolean", nullable=false)
     */
    private $userType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="allow_withdraw", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $allowWithdraw = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="all_income", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $allIncome = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pending_commission", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $pendingCommission = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="balance", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $balance = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="sale_amount", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $saleAmount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="total_withdraw", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $totalWithdraw = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="frozen_capital", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $frozenCapital = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="unexpenditure_commission", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $unexpenditureCommission = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="expenditure_commission", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $expenditureCommission = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="shop_id", type="bigint", nullable=false)
     */
    private $shopId;

    /**
     * @var string
     *
     * @ORM\Column(name="shareholder", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $shareholder = '0.00';



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
     * @return JukuUserAccount
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
     * Set point
     *
     * @param integer $point
     *
     * @return JukuUserAccount
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return integer
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set userType
     *
     * @param boolean $userType
     *
     * @return JukuUserAccount
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
     * Set allowWithdraw
     *
     * @param string $allowWithdraw
     *
     * @return JukuUserAccount
     */
    public function setAllowWithdraw($allowWithdraw)
    {
        $this->allowWithdraw = $allowWithdraw;

        return $this;
    }

    /**
     * Get allowWithdraw
     *
     * @return string
     */
    public function getAllowWithdraw()
    {
        return $this->allowWithdraw;
    }

    /**
     * Set allIncome
     *
     * @param string $allIncome
     *
     * @return JukuUserAccount
     */
    public function setAllIncome($allIncome)
    {
        $this->allIncome = $allIncome;

        return $this;
    }

    /**
     * Get allIncome
     *
     * @return string
     */
    public function getAllIncome()
    {
        return $this->allIncome;
    }

    /**
     * Set pendingCommission
     *
     * @param string $pendingCommission
     *
     * @return JukuUserAccount
     */
    public function setPendingCommission($pendingCommission)
    {
        $this->pendingCommission = $pendingCommission;

        return $this;
    }

    /**
     * Get pendingCommission
     *
     * @return string
     */
    public function getPendingCommission()
    {
        return $this->pendingCommission;
    }

    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return JukuUserAccount
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

    /**
     * Set saleAmount
     *
     * @param string $saleAmount
     *
     * @return JukuUserAccount
     */
    public function setSaleAmount($saleAmount)
    {
        $this->saleAmount = $saleAmount;

        return $this;
    }

    /**
     * Get saleAmount
     *
     * @return string
     */
    public function getSaleAmount()
    {
        return $this->saleAmount;
    }

    /**
     * Set totalWithdraw
     *
     * @param string $totalWithdraw
     *
     * @return JukuUserAccount
     */
    public function setTotalWithdraw($totalWithdraw)
    {
        $this->totalWithdraw = $totalWithdraw;

        return $this;
    }

    /**
     * Get totalWithdraw
     *
     * @return string
     */
    public function getTotalWithdraw()
    {
        return $this->totalWithdraw;
    }

    /**
     * Set frozenCapital
     *
     * @param string $frozenCapital
     *
     * @return JukuUserAccount
     */
    public function setFrozenCapital($frozenCapital)
    {
        $this->frozenCapital = $frozenCapital;

        return $this;
    }

    /**
     * Get frozenCapital
     *
     * @return string
     */
    public function getFrozenCapital()
    {
        return $this->frozenCapital;
    }

    /**
     * Set unexpenditureCommission
     *
     * @param string $unexpenditureCommission
     *
     * @return JukuUserAccount
     */
    public function setUnexpenditureCommission($unexpenditureCommission)
    {
        $this->unexpenditureCommission = $unexpenditureCommission;

        return $this;
    }

    /**
     * Get unexpenditureCommission
     *
     * @return string
     */
    public function getUnexpenditureCommission()
    {
        return $this->unexpenditureCommission;
    }

    /**
     * Set expenditureCommission
     *
     * @param string $expenditureCommission
     *
     * @return JukuUserAccount
     */
    public function setExpenditureCommission($expenditureCommission)
    {
        $this->expenditureCommission = $expenditureCommission;

        return $this;
    }

    /**
     * Get expenditureCommission
     *
     * @return string
     */
    public function getExpenditureCommission()
    {
        return $this->expenditureCommission;
    }

    /**
     * Set shopId
     *
     * @param integer $shopId
     *
     * @return JukuUserAccount
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
     * Set shareholder
     *
     * @param string $shareholder
     *
     * @return JukuUserAccount
     */
    public function setShareholder($shareholder)
    {
        $this->shareholder = $shareholder;

        return $this;
    }

    /**
     * Get shareholder
     *
     * @return string
     */
    public function getShareholder()
    {
        return $this->shareholder;
    }
}
