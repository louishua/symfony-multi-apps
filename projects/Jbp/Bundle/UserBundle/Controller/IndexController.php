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
        var_dump("我进来了");exit;

    }
}
