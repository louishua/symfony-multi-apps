<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{

    //接口调用服务Demo
//    public function mobileRegisterAction(Request $request)
//    {
//        $mobile = $request->request->get('mobile','5678');
//        $password = $request->request->get('password','22222');
//        $userService = $this->get('user_service');
//        $res = $userService->registerByUserMobile($mobile,$password);
//        if($res)
//        {
//            echo json_encode([
//                'error'=>0,
//                'msg'=>'ok',
//            ]);exit;
//        }else{
//            echo json_encode([
//                'error'=>1,
//                'msg'=>'fail',
//            ]);exit;
//        }
//    }
}
