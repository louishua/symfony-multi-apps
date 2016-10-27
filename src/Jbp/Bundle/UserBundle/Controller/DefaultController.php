<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Doctrine\Common\Util\Debug;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
//        echo '<pre>';var_dump($this);exit;
//        echo '<pre>';Debug::dump($this);exit;
        $userService = $this->get('user_service');
        $userService->registerByUserMobile('1392299','123456');
        exit;
    }
}
