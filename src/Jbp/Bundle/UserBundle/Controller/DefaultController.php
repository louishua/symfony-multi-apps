<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Doctrine\Common\Util\Debug;
use Jbp\Bundle\UserBundle\Service\CommonService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends CommonController
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        $userService = $this->get('user_service');
        $reg = $userService->registerByUserMobile('1392299','123456');
        if($reg)
        {
            echo '注册成功';
        }else{
            echo "注册失败";
        }
        exit;
    }
}
