<?php

namespace Jbp\Bundle\UserBundle\Entity;

/**
 * JukuUserSecurity
 */
class JukuUserSecurity
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $securityQuestion1;

    /**
     * @var string
     */
    private $securityAnswer1;

    /**
     * @var string
     */
    private $securityQuestion2;

    /**
     * @var string
     */
    private $securityAnswer2;

    /**
     * @var string
     */
    private $securityQuestion3;

    /**
     * @var string
     */
    private $securityAnswer3;


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
     * Set securityQuestion1
     *
     * @param string $securityQuestion1
     *
     * @return JukuUserSecurity
     */
    public function setSecurityQuestion1($securityQuestion1)
    {
        $this->securityQuestion1 = $securityQuestion1;

        return $this;
    }

    /**
     * Get securityQuestion1
     *
     * @return string
     */
    public function getSecurityQuestion1()
    {
        return $this->securityQuestion1;
    }

    /**
     * Set securityAnswer1
     *
     * @param string $securityAnswer1
     *
     * @return JukuUserSecurity
     */
    public function setSecurityAnswer1($securityAnswer1)
    {
        $this->securityAnswer1 = $securityAnswer1;

        return $this;
    }

    /**
     * Get securityAnswer1
     *
     * @return string
     */
    public function getSecurityAnswer1()
    {
        return $this->securityAnswer1;
    }

    /**
     * Set securityQuestion2
     *
     * @param string $securityQuestion2
     *
     * @return JukuUserSecurity
     */
    public function setSecurityQuestion2($securityQuestion2)
    {
        $this->securityQuestion2 = $securityQuestion2;

        return $this;
    }

    /**
     * Get securityQuestion2
     *
     * @return string
     */
    public function getSecurityQuestion2()
    {
        return $this->securityQuestion2;
    }

    /**
     * Set securityAnswer2
     *
     * @param string $securityAnswer2
     *
     * @return JukuUserSecurity
     */
    public function setSecurityAnswer2($securityAnswer2)
    {
        $this->securityAnswer2 = $securityAnswer2;

        return $this;
    }

    /**
     * Get securityAnswer2
     *
     * @return string
     */
    public function getSecurityAnswer2()
    {
        return $this->securityAnswer2;
    }

    /**
     * Set securityQuestion3
     *
     * @param string $securityQuestion3
     *
     * @return JukuUserSecurity
     */
    public function setSecurityQuestion3($securityQuestion3)
    {
        $this->securityQuestion3 = $securityQuestion3;

        return $this;
    }

    /**
     * Get securityQuestion3
     *
     * @return string
     */
    public function getSecurityQuestion3()
    {
        return $this->securityQuestion3;
    }

    /**
     * Set securityAnswer3
     *
     * @param string $securityAnswer3
     *
     * @return JukuUserSecurity
     */
    public function setSecurityAnswer3($securityAnswer3)
    {
        $this->securityAnswer3 = $securityAnswer3;

        return $this;
    }

    /**
     * Get securityAnswer3
     *
     * @return string
     */
    public function getSecurityAnswer3()
    {
        return $this->securityAnswer3;
    }
}

