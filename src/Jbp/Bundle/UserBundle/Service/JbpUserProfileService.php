<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUserProfile;

class JbpUserProfileService extends CommonService
{

    /**
     * 新增用户配置初始数据
     * @param $data
     */
    public function newrecord($data)
    {
        $em = $this->getDoctrine()->getManager();
        $userProfileEntity = new JukuUserProfile();
        $userProfileEntity->setUserId($data['user_id']);
        $em->persist($userProfileEntity);
        $em->flush();
    }

    /**
     * 店铺开通时更新数据
     * @param $id
     * @param $data
     */
    public function updateAtOpenService($id,$data)
    {
        $em = $this->getDoctrine()->getManager();
        $userProfileEntity = $this->getDoctrine()->getRepository('JbpUserBundle:JukuUserProfile')->find($id);
        //...
        $em->persist($userProfileEntity);
        $em->flush();
    }
}
