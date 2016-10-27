<?php

namespace Jbp\Bundle\UserBundle;

use Jbp\Bundle\UserBundle\Entity\JukuUser;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Jbp\Bundle\UserBundle\DependencyInjection\UnconventionalExtensionClass;

class JbpUserBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new UnconventionalExtensionClass();
    }
}
