<?php

namespace Jbp\Bundle\UserBundle\Service;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BaseUserService
{

    /**
     * 更新登录密码
     * @param $userid
     * @param $mobile
     * @return bool
     */
    public function updatePassword($id,$password)
    {
    }

    /**
     * 更新手机号码
     * @param $userid
     * @param $mobile
     * @return bool
     */
    public function updateMobile($id,$mobile)
    {
    }

    /**
     * 根据手机号查找用户
     * @param $mobile
     * @return bool
     */
    public function findByMobile($mobile)
    {
    }

    /**
     * 更新微信信息
     * @param $userid
     * @param $mobile
     * @return bool
     */
    public function updateWechat($id,array $wechatInfo)
    {
    }

    /**
     * 根据ID查找用户名
     * @param $id
     * @return null
     */
    public function getNameById($id)
    {
    }

    /**
     * 根据ID查找记录
     * @param $id
     * @return null
     */
    public function getRecordById($id)
    {
    }

    /**
     * 账号名生成器
     * @param int $length
     * @param string $prex
     * @return string
     */
    public function produceName($length=8 , $prex='jk')
    {
    }


    /**
     * 密码加密
     * @param $originPassword
     * @return string
     */
    protected function encryptPassword($originPassword='')
    {
    }

}
