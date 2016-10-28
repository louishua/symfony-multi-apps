<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
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

    /**
     * @param Request $request
     */
    public function registerAction(Request $request)
    {
        $mobile = $request->query->get('mobile','1392299');
        $password = $request->query->get('password','123456');
        $userService = $this->get('user_service');
        $reg = $userService->registerByUserMobile($mobile,$password);
        if($reg)
        {
            echo '注册成功'.time();exit;
        }else{
            echo "注册失败".time();exit;
        }
    }

    /**
     * @param Request $request
     */
    public function loginAction(Request $request)
    {
        $mobile = $request->query->get('mobile','1392299');
        $password = $request->query->get('password','123456');
        $userService = $this->get('user_service');
        $reg = $userService->loginByMobile($mobile,$password);
        if(!$reg)
        {
            echo "登录失败".time();exit;
        }else{
            echo "登录成功".time();
            return $this->redirectToRoute('userBundle-index');
        }
    }

    /**
     * @param Request $request
     */
    public function logoutAction(Request $request)
    {
        $userService = $this->get('user_service');
        $reg = $userService->logout();
        if(!$reg)
        {
            echo "注销失败".time();exit;
        }else{
            echo "注销成功".time();
            return $this->redirectToRoute('userBundle-index');
        }
    }
}
