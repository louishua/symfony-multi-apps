<?php

namespace Jbp\Bundle\UserBundle\Controller;

use AppBundle\Entity\Test;
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
        exit('会员Bundles');
    }
}
