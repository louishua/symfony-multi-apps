<?php

namespace Jbp\Bundle\UserBundle\Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommonService extends Controller
{

    public $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getDoctrine()
    {
        return $this->doctrine;
    }

}
