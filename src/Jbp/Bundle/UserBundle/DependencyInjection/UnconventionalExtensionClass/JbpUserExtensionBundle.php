<?php

namespace Jbp\Bundle\UserBundle\DependencyInjection\UnconventionalExtensionClass;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class JbpUserExtensionBundle extends Bundle
{

    public function getContainerExtension()
    {
        return new UnconventionalExtensionClass();
    }
}