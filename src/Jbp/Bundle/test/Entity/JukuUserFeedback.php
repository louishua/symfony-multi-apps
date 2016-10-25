<?php

namespace Jbp\Bundle\UserBundle\Entity;

/**
 * JukuUserFeedback
 */
class JukuUserFeedback
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
     * @var integer
     */
    private $shopId;

    /**
     * @var string
     */
    private $feedback;

    /**
     * @var string
     */
    private $image = '';

    /**
     * @var string
     */
    private $imageExt = '';

    /**
     * @var integer
     */
    private $dateline = '0';

    /**
     * @var boolean
     */
    private $isDel = '0';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var string
     */
    private $qq = '';


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
     * @return JukuUserFeedback
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
     * @return JukuUserFeedback
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
     * Set feedback
     *
     * @param string $feedback
     *
     * @return JukuUserFeedback
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return JukuUserFeedback
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set imageExt
     *
     * @param string $imageExt
     *
     * @return JukuUserFeedback
     */
    public function setImageExt($imageExt)
    {
        $this->imageExt = $imageExt;

        return $this;
    }

    /**
     * Get imageExt
     *
     * @return string
     */
    public function getImageExt()
    {
        return $this->imageExt;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     *
     * @return JukuUserFeedback
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
     * Set isDel
     *
     * @param boolean $isDel
     *
     * @return JukuUserFeedback
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
     * Set tel
     *
     * @param string $tel
     *
     * @return JukuUserFeedback
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set qq
     *
     * @param string $qq
     *
     * @return JukuUserFeedback
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
}

