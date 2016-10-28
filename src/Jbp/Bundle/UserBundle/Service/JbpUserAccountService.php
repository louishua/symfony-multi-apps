<?php

namespace Jbp\Bundle\UserBundle\Service;

use Jbp\Bundle\UserBundle\Entity\JukuUserAccount;

class JbpUserAccountService extends CommonService
{

    /**
     * 新增用户账单初始数据
     * @param $data
     */
    public function newrecord($data)
    {
        $em = $this->getDoctrine()->getManager();
        $userAccountEntity = new JukuUserAccount();
        $userAccountEntity->setUserId($data['user_id']);
        $userAccountEntity->setShopId(0);
        $em->persist($userAccountEntity);
        $em->flush();
    }

}
