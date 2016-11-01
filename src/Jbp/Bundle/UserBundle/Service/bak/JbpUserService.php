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
            $userEntity->setPassword($this->encryptPassword($data['password']));
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
            $userProfileService->createRecord($profileData);

            //新增user_account
            $accountData = [
                'user_id' => $userEntity->getId(),
                'shop_id' => 0,
            ];
            $userAccountService = $this->get('userAccount_service');
            $userAccountService->createRecord($accountData);

            $em->getConnection()->commit();
            return true;
        }catch (Exception $e){
            $em->getConnection()->rollback();
            return false;
        }
    }

    /**
     * 商家注册
     * @param $data
     * @return bool
     */
    private function salerRegister($data)
    {
        $data['type'] = 1;
        $data['shop_id'] = 0;
        $data['wechat_openid'] = '';
        $data['wechat_unionid'] = '';
        $data['wechat_open_openid'] = '';
        return $this->register($data);
    }

    /**
     * 买家注册
     * @param $data
     * @return bool
     */
    private function buyerRegister($data)
    {
        return $this->register($data);
    }

    /**
     * 商家手机注册
     * @param array $data
     */
    public function registerBySalerMobile($mobile,$password)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneBy([
            'mobile'=>$mobile,
        ]);
        if(empty($findEntity))
        {
            $data['mobile'] = $mobile;
            $data['password'] = $password;
            return $this->salerRegister($data);
        }else{
            return false;
        }
    }

    /**
     * 商家后台注册
     * @param array $data
     */
    public function registerByAdmin($username,$password)
    {
        $data['username'] = $username;
        $data['password'] = $password;
        return $this->salerRegister($data);
    }

    /**
     * 买家微信注册
     * @param array $data
     */
    public function registerByBuyerWechat(array $wechatInfo)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneBy([
            'wechat_openid'=>$wechatInfo['wechat_openid'],
        ]);
        if(empty($findEntity))
        {
            $data['type'] = 0;
            $data['wechat_openid'] = $wechatInfo['wechat_openid'];
            $data['wechat_unionid'] = $wechatInfo['wechat_unionid'];
            $data['wechat_open_openid'] = $wechatInfo['wechat_open_openid'];
            return $this->buyerRegister($data);
        }else{
            return false;
        }
    }


    /**
     * 会员注销通用方法
     * @param array $data
     */
    public function logout()
    {
        $sessionService = $this->get('session');
        $sessionService->set('user_id',null);
        return true;
    }

    /**
     * 会员登录通用方法
     * @param array $data
     */
    private function login(array $data)
    {
        $sessionService = $this->get('session');
        $sessionService->set('user_id',$data['user_id']);
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
            $loginInfo['user_id'] = $findEntity->getId();
            return $this->login($loginInfo);
        }
    }

    /**
     * 微信登录
     * @param array $data
     */
    public function loginByWechatOpenid($wechatOpenid)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneBy([
            'wechat_openid'=>$wechatOpenid,
        ]);
        $data['user_id'] = $findEntity->getId();
        return $this->login($data);
    }

    /**
     * 微信登录
     * @param array $data
     */
    public function loginByWechatUnionid($wechatUnionid)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneBy([
            'wechat_unionid'=>$wechatUnionid,
        ]);
        $data['user_id'] = $findEntity->getId();
        return $this->login($data);
    }


    /**
     * 更新登录密码
     * @param $userid
     * @param $mobile
     * @return bool
     */
    public function updatePassword($id,$password)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->find($id);
        $findEntity->setPassword($password);
        $em->flush();
        return true;
    }

    /**
     * 更新手机号码
     * @param $userid
     * @param $mobile
     * @return bool
     */
    public function updateMobile($id,$mobile)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->find($id);
        $findEntity->setMobile($mobile);
        $em->flush();
        return true;
    }

    /**
     * 根据手机号查找用户
     * @param $mobile
     * @return bool
     */
    public function findByMobile($mobile)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneByMobile($mobile);
        if(!empty($findEntity))
        {
            return $findEntity;
        }else{
            return false;
        }
    }

    /**
     * 更新微信信息
     * @param $userid
     * @param $mobile
     * @return bool
     */
    public function updateWechat($id,array $wechatInfo)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->find($id);
        if(!empty($wechatInfo['wechat_openid'])) {
            $findEntity->setMobile($wechatInfo['wechat_openid']);
        }
        if(!empty($wechatInfo['wechat_unionid'])) {
            $findEntity->setMobile($wechatInfo['wechat_unionid']);
        }
        if(!empty($wechatInfo['wechat_open_openid'])) {
            $findEntity->setMobile($wechatInfo['wechat_open_openid']);
        }
        $em->flush();
        return true;
    }

    /**
     * 根据ID查找用户名
     * @param $id
     * @return null
     */
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

    /**
     * 根据ID查找记录
     * @param $id
     * @return null
     */
    public function getRecordById($id)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUser')->findOneById($id);
        if(!empty($findEntity))
        {
            return $findEntity;
        }else{
            return null;
        }
    }

    /**
     * 账号名生成器
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


    /**
     * 密码加密
     * @param $originPassword
     * @return string
     */
    private function encryptPassword($originPassword='')
    {
        return $originPassword;
    }
}
