<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        $mobile = $request->query->get('mobile','1392299');
        $password = $request->query->get('password','123456');
        $userService = $this->get('saler_service');
        $reg = $userService->registerByMobile($mobile,$password);
        
        if($reg)
        {
            echo '注册成功'.time();exit;
        }else{
            echo "注册失败".time();exit;
        }
    }
}
