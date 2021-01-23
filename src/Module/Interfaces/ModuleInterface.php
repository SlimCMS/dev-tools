<?php

declare(strict_types=1);

namespace SlimCms\Module\Interfaces;

use DI\Container;
use SlimCms\Module\ModuleInfo;
use SlimCms\Route\Interfaces\RouterInterface;

interface ModuleInterface
{
    /**
     * Inject all module dependencies.
     * 
     * @param Container $container
     * @return void
     */
    public function inject(Container $container): void;

    /**
     * @return ModuleInfo
     */
    public function info(): ModuleInfo;

    /**
     * @param RouterInterface $router
     * @return void
     */
    public function routes(RouterInterface $router): void;
}