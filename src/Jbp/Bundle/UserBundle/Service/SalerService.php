<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUser;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\KernelInterface;

class SalerService extends BaseUserService
{

    public $doctrine;

    protected $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
        $this->doctrine = $this->get('doctrine');
    }

    /**
     * 获取doctrine
     * @return mixed
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }

    /**
     * 服务调用方法
     * @param $id
     * @return object
     */
    public function get($id)
    {
        return $this->kernel->getContainer()->get($id);
    }

    /**
     * 注册通用方法
     */
    private function register(array $data){}

    /**
     * 注册前
     */
    public function beforeRegister(){}

    /**
     * 注册后
     */
    public function afterRegister(){}

    /**
     * 手机注册
     */
    public function registerByMobile($mobile,$password){}

    /**
     * 后台注册
     */
    public function registerByAdmin($username,$password){}

    /**
     * 注销通用方法
     */
    public function logout(){}

    /**
     * 注销前
     */
    public function beforeLogout(){}

    /**
     * 注销后
     */
    public function afterLogout(){}

    /**
     * 会员登录通用方法
     */
    private function login(array $data){}

    /**
     * 登陆前
     */
    public function beforeLogin(){}

    /**
     * 登陆后
     */
    public function afterLogin(){}

    /**
     * 手机登录
     */
    public function loginByMobile($mobile,$password){}

    /**
     * 微信登录
     */
    public function loginByWechatOpenid($wechatOpenid){}

    /**
     * 微信扫码登录
     */
    public function loginByWechatUnionid($wechatUnionid){}

}
