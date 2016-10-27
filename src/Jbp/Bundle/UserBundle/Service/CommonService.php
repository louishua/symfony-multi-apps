<?php

namespace Jbp\Bundle\UserBundle\Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\HttpKernel\KernelInterface;

class CommonService
{

    public $doctrine;

    public function __construct(KernelInterface $kernel)
    {//$kernel = new UsercenterKernel('dev', true);
        var_dump($kernel->getContainer()->get('userAccount_service'));exit;
//        $this->doctrine = $doctrine;
    }
    public function getDoctrine()
    {
        return $this->doctrine;
    }

}
