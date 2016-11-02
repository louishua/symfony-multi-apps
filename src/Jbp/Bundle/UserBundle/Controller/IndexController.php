<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        $curUser = $this->getUser();
        if(empty($curUser))
        {
            echo "请先登陆,<a href='login'>登陆</a>";
        }else{
            echo "你好，".$curUser->getUsername().",<a href='logout'>注销</a>";
        }
        exit;
    }
}
