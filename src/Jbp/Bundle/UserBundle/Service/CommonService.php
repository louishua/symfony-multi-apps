<?php

namespace Jbp\Bundle\UserBundle\Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\HttpKernel\KernelInterface;

class CommonService
{

    public $doctrine;

    protected $kernel;

    public function __construct(KernelInterface $kernel,$doctrine)
    {
        $this->kernel = $kernel;
        $this->doctrine = $doctrine;
    }

    /**
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
