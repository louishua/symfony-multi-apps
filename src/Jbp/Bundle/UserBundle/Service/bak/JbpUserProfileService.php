<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUserProfile;

class JbpUserProfileService extends CommonService
{

    /**
     * 新增用户配置初始数据
     * @param $data
     */
    public function createRecord($data)
    {
        $em = $this->getDoctrine()->getManager();
        $userProfileEntity = new JukuUserProfile();
        $userProfileEntity->setUserId($data['user_id']);
        $em->persist($userProfileEntity);
        $em->flush();
    }


    /**
     * 更新登录密码
     * @param $userid
     * @param $mobile
     * @return bool
     */
    public function updatePayPassword($id,$pay_password)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUserProfile')->find($id);
        $findEntity->setPayPassword($pay_password);
        $em->flush();
        return true;
    }

    /**
     * 更新提现信息
     * @param $id
     * @param array $withdraw
     * @return bool
     */
    public function updateWithdraw($id,array $withdraw)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUserProfile')->find($id);
        if(!empty($withdraw['withdraw_account'])){
            $findEntity->setWithdrawAccount($withdraw['withdraw_account']);
        }
        if(!empty($withdraw['withdraw_owner'])){
            $findEntity->setWithdrawOwner($withdraw['withdraw_owner']);
        }
        if(!empty($withdraw['withdraw_bank_name'])){
            $findEntity->setWithdrawBankName($withdraw['withdraw_bank_name']);
        }
        if(!empty($withdraw['withdraw_bank_addr'])){
            $findEntity->setWithdrawBankAddr($withdraw['withdraw_bank_addr']);
        }
        if(!empty($withdraw['withdraw_method'])){
            $findEntity->setWithdrawMethod($withdraw['withdraw_method']);
        }
        $em->flush();
        return true;
    }

    /**
     * 更新邮箱信息
     * @param $userid
     * @param $email
     */
    public function updateEmail($userid,$email)
    {
        $userProfileEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUserProfile')->findOneBy([
            'user_id'=>$userid,
        ]);
        if(!empty($userProfileEntity))
        {
            $em = $this->getDoctrine()->getManager();
            $userProfileEntity->setEmail($email);
            $em->flush();
            return true;
        }else{
            return false;
        }
    }

    /**
     * 根据邮箱查找用户
     * @param $mobile
     * @return bool
     */
    public function findByEmail($email)
    {
        $findEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUserProfile')->findOneByEmail($email);
        if(!empty($findEntity))
        {
            return $findEntity;
        }else{
            return false;
        }
    }

}
