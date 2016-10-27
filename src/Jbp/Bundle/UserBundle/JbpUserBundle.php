<?php

namespace Jbp\Bundle\UserBundle;

use Jbp\Bundle\UserBundle\DependencyInjection\JbpUserExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JbpUserBundle extends Bundle
{

    /**
     * 返回自定义扩展
     * @return JbpUserExtension
     */
    public function getContainerExtension()
    {
        return new JbpUserExtension();
    }
}
