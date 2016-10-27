<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Jbp\Bundle\UserBundle\Entity\JukuUser;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JbpUserServiceController extends Controller
{
    public function getManageAction()
    {
        return $this->getDoctrine()->getManager();
    }
}
