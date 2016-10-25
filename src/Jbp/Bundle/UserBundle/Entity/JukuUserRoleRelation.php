<?php

namespace Jbp\Bundle\UserBundle\Entity;

/**
 * JukuUserRoleRelation
 */
class JukuUserRoleRelation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId = '0';

    /**
     * @var integer
     */
    private $roleId = '0';


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
     * @return JukuUserRoleRelation
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
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return JukuUserRoleRelation
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
}

