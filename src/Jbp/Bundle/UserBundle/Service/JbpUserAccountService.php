<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUserAccount;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JbpUserAccountService extends Controller
{

    /**
     * 新增用户账单初始数据
     * @param $data
     */
    public function newrecord($data)
    {
        $em = $this->getDoctrine()->getManager();
        $userProfileEntity = new JukuUserAccount();
        //...
        $em->persist($userProfileEntity);
    }

    /**
     * 店铺开通时更新数据
     * @param $id
     * @param $data
     */
    public function updateAtOpenService($id,$data)
    {
        $em = $this->getDoctrine()->getManager();
        $userAccountEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUserAccount')->find($id);
        //...
        $em->persist($userAccountEntity);
    }
}
