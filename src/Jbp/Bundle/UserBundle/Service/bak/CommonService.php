<?php

namespace Jbp\Bundle\UserBundle\Service;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CommonService extends Controller
{

    public $doctrine;

    protected $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
        $this->doctrine = $this->get('doctrine');
    }

    /**
     * 获取doctrine
     * @return mixed
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }

    /**
     * 服务调用方法
     * @param $id
     * @return object
     */
    public function get($id)
    {
        return $this->kernel->getContainer()->get($id);
    }

}
