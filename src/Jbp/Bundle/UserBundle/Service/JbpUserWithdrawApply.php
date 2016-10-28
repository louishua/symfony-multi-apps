<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUserAccount;

class JbpUserWithdrawApplyService extends CommonService
{
    /**
     * 新增提现申请
     * @param $data
     */
    public function newrecord($data)
    {
        $em = $this->getDoctrine()->getManager();
        $userSecurityEntity = new JukuUserAccount();
        $userSecurityEntity->setSecurityQuestion1($data['quest1']);
        $userSecurityEntity->setSecurityAnswer1($data['answer1']);
        $userSecurityEntity->setSecurityQuestion2($data['quest2']);
        $userSecurityEntity->setSecurityAnswer2($data['answer2']);
        $userSecurityEntity->setSecurityQuestion3($data['quest3']);
        $userSecurityEntity->setSecurityAnswer3($data['answer3']);
        $em->persist($userSecurityEntity);
        $em->flush();
        return true;
    }

    /**
     * 更新安全问题
     * @param $userid
     * @param $data
     * @return bool
     */
    public function updateById($userid,$data)
    {
        $em = $this->getDoctrine()->getManager();
        $userSecurityEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUserSecurity')->findOneBy([
            'user_id'=>$userid
        ]);
        $userSecurityEntity->setSecurityQuestion1($data['quest1']);
        $userSecurityEntity->setSecurityAnswer1($data['answer1']);
        $userSecurityEntity->setSecurityQuestion2($data['quest2']);
        $userSecurityEntity->setSecurityAnswer2($data['answer2']);
        $userSecurityEntity->setSecurityQuestion3($data['quest3']);
        $userSecurityEntity->setSecurityAnswer3($data['answer3']);
        $em->flush();
        return true;
    }
}
