<?php

namespace Jbp\Bundle\UserBundle;

use Jbp\Bundle\UserBundle\DependencyInjection\JbpUserExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JbpUserBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new JbpUserExtension();
    }
}
