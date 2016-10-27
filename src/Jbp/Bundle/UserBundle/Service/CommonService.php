<?php

namespace Jbp\Bundle\UserBundle\Service;

class CommonService
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
