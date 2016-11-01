<?php

namespace Jbp\Bundle\UserBundle\Controller;

<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
=======
=======
>>>>>>> f60832038a874a1ed70371b062a904c2f42f68d5
use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
>>>>>>> f60832038a874a1ed70371b062a904c2f42f68d5
=======
>>>>>>> f60832038a874a1ed70371b062a904c2f42f68d5

class RegisterController extends Controller
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        $mobile = $request->query->get('mobile','1392299');
        $password = $request->query->get('password','123456');
<<<<<<< HEAD
<<<<<<< HEAD
        $userService = $this->get('saler_service');
        $reg = $userService->registerByMobile($mobile,$password);
=======
        $userService = $this->get('user_service');
        $reg = $userService->registerByUserMobile($mobile,$password);
>>>>>>> f60832038a874a1ed70371b062a904c2f42f68d5
=======
        $userService = $this->get('user_service');
        $reg = $userService->registerByUserMobile($mobile,$password);
>>>>>>> f60832038a874a1ed70371b062a904c2f42f68d5
        if($reg)
        {
            echo '注册成功'.time();exit;
        }else{
            echo "注册失败".time();exit;
        }
    }
}
