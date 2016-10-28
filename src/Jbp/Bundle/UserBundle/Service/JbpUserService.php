<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUser;
use Symfony\Component\Config\Definition\Exception\Exception;

class JbpUserService extends CommonService
{

    /**
     * 会员注册通用方法
     * @param array $data
     */
    private function register(array $data)
    {
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->beginTransaction();
        try{
            $userEntity = new JukuUser();
            $userEntity->setUsername($this->produceName());
            $userEntity->setPassword($data['password']);
            $userEntity->setSalt('');
            $userEntity->setType($data['type']);
            $userEntity->setCreateTime(time());
            $userEntity->setRegisterIp(ip2long($_SERVER['REMOTE_ADDR']));
            $userEntity->setShopId($data['shop_id']);
            $userEntity->setAuthKey('');
            $userEntity->setWechatOpenid($data['wechat_openid']);
            $userEntity->setWechatUnionid($data['wechat_unionid']);
            $userEntity->setWechatOpenOpenid($data['wechat_open_openid']);
            $userEntity->setVersion(0);
            $userEntity->setMobile($data['mobile']);
            $em->persist($userEntity);
            $em->flush();

            //新增user_profile
            $profileData = [
                'user_id' => $userEntity->getId(),
            ];
            $userProfileService = $this->get('userProfile_service');
            $userProfileService->newRecord($profileData);

            //新增user_account
            $accountData = [
                'user_id' => $userEntity->getId(),
                'shop_id' => 0,
            ];
            $userAccountService = $this->get('userAccount_service');
            $userAccountService->newRecord($accountData);

            $em->getConnection()->commit();
            return true;
        }catch (Exception $e){
            $em->getConnection()->rollback();
            return false;
        }
    }

    private function salerRegister($data)
    {
        $data['type'] = 1;
        $data['shop_id'] = 0;
        $data['wechat_openid'] = '';
        $data['wechat_unionid'] = '';
        $data['wechat_open_openid'] = '';
        return $this->register($data);
    }

    private function buyerRegister($data)
    {
        return $this->register($data);
    }

    /**
     * 商家会员前台注册
     * @param array $data
     */
    public function registerByUserMobile($mobile,$password)
    {
        $data['mobile'] = $mobile;
        $data['password'] = $password;
        return $this->salerRegister($data);
    }

    /**
     * 会员后台注册
     * @param array $data
     */
    public function registerByAdmin($username,$password)
    {
        $data['username'] = $username;
        $data['password'] = $password;
        return $this->salerRegister($data);
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
        return $this->buyerRegister($data);
    }


    /**
     * 会员登录通用方法
     * @param array $data
     */
    public function logout()
    {
        session_start();
        $_SESSION['user_id'] = null;
        return true;
    }

    /**
     * 会员登录通用方法
     * @param array $data
     */
    private function login(array $data)
    {
        session_start();
        $_SESSION['user_id'] = $data['user_id'];
        return true;
    }

    /**
     * 手机登录
     * @param array $data
     */
    public function loginByMobile($mobile,$password)
    {
        $data['mobile'] = $mobile;
        $data['password'] = $password;
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneBy([
            'mobile'=>$mobile,
            'password'=>$password,
        ]);
        if(empty($findEntity))
        {
            return false;
        }else{
            $loginInfo = ['user_id'=>$findEntity->getId()];
            return $this->login($loginInfo);
        }
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
            return false;
        }
    }


    /**
     * Username生成器
     * @param int $length
     * @param string $prex
     * @return string
     */
    public function produceName($length=8 , $prex='jk')
    {
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';//62个字符
        $strlen = 62;
        while ($length > $strlen) {
            $str .= $str;
            $strlen += 62;
        }
        $str = str_shuffle($str);
        $username = $prex.substr($str,0,$length);
        return $username;
    }


    public function getNameById($id)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneById($id);
        if(!empty($findEntity))
        {
            return $findEntity->getUsername();
        }else{
            return null;
        }
    }
}
