<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        $sessionService = $this->get('session');
        $sessionUser = $sessionService->get('user_id');
        if(empty($sessionUser)){
            echo '未登录,';
        }else{
            $userService = $this->get('user_service');
            $username = $userService->getNameById($sessionUser);
            echo '你好，'.$username.',';
        }
        echo '会员首页';exit;
    }
}
