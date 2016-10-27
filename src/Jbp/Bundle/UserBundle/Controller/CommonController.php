<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommonController extends Controller
{

    /**
     * 服务注入
     * @param string $id
     * @return object
     */
    public function get($id)
    {
        $service = parent::get($id);
        $service->setContainer($this->container);
        return $service;
    }

}
