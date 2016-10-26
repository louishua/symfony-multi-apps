<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUser;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JbpUserService extends Controller
{

    /**
     * 会员注册通用方法
     * @param array $data
     */
    private function register(array $data)
    {
        var_dump($this);echo 22;exit;
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->beginTransaction();echo 33;exit;
        try{
            $userEntity = new JukuUser();
            $userEntity->setUsername($data['username']);
            $userEntity->setPassword($data['password']);
            $userEntity->setSalt('');
            $userEntity->setType($data['type']);
            $userEntity->setCreateTime(time());
            $userEntity->setRegisterIp(ip2long($_SERVER['REMOTE_ADDR']));
            $userEntity->setShopId($data['shop_id']);
            $userEntity->setAuthKey($data['auth_key']);
            $userEntity->setWechatOpenid($data['wechat_openid']);
            $userEntity->setWechatUnionid($data['wechat_unionid']);
            $userEntity->setWechatOpenOpenid($data['wechat_open_openid']);
            $userEntity->setVersion(0);
            $em->persist($userEntity);

            //新增user_profile
//            $profileData = [];
//            $userProfileService = $this->get('userProfile_service');
//            $userProfileService->newRecord($profileData);
//
//            //新增user_account
//            $accountData = [];
//            $userAccountService = $this->get('userAccount_service');
//            $userAccountService->newRecord($accountData);

            $em->flush();
            $em->getConnection()->commit();
            return true;
        }catch (Exception $e){
            $em->getConnection()->rollback();
//            throw $e;
            return false;
        }
    }

    /**
     * 商家会员前台注册
     * @param array $data
     */
    public function registerByUserMobile($username,$password)
    {
        $data['username'] = $username;
        $data['password'] = $password;
        $data['type'] = 1;
        $data['shop_id'] = 0;
        $data['wechat_openid'] = '';
        $data['wechat_unionid'] = '';
        $data['wechat_open_openid'] = '';
        return $this->register($data);
    }

    /**
     * 会员后台注册
     * @param array $data
     */
    public function registerByAdmin($username,$password)
    {
        $data['username'] = $username;
        $data['password'] = $password;
        $data['type'] = 1;
        $data['shop_id'] = 0;
        $data['wechat_openid'] = '';
        $data['wechat_unionid'] = '';
        $data['wechat_open_openid'] = '';
        return $this->register($data);
    }

    /**
     * 买家会员微信注册
     * @param array $data
     */
    public function registerByBuyerWechat(array $wechatInfo)
    {
        $data['type'] = 0;
        $data['wechat_openid'] = $wechatInfo['wechat_openid'];
        $data['wechat_unionid'] = $wechatInfo['wechat_unionid'];
        $data['wechat_open_openid'] = $wechatInfo['wechat_open_openid'];
        return $this->register($data);
    }

    /**
     * 会员登录通用方法
     * @param array $data
     */
    private function login(array $data)
    {
        return true;
    }

    /**
     * 手机登录
     * @param array $data
     */
    public function loginByMobile($username,$password)
    {
        $data['username'] = $username;
        $data['password'] = $password;
        return $this->login($data);
    }

    /**
     * 微信登录
     * @param array $data
     */
    public function loginByWechat($wechatInfo)
    {
        $data = $wechatInfo;
        return $this->login($data);
    }

    /**
     * 开通店铺（更新会员信息）
     *
     */
    public function openService($userId)
    {
        $em = $this->getDoctrine()->getManager();
        try{
            //新增shop表

            //更新user_profile
            $profileData = [];
            $userProfileService = $this->get('userProfile_service');
            $userProfileService->updateAtOpenService($profileData);
            //更新user表shop_id
            $userEntity = new JukuUser();
            $userEntity->shop_id = 0;
            $em->persist($userEntity);
            //更新user_account表
            $accountData = [];
            $userAccountService = $this->get('userAccount_service');
            $userAccountService->updateAtOpenService($accountData);
            $em->flush();
            $em->getConnection()->commit();
            return true;
        }catch (Exception $e){
            $em->getConnection()->rollback();
//            throw $e;
            return false;
        }
    }

}
