<?php

declare(strict_types=1);

namespace Slimcms\Admin_panel;

use Core\Container\ContainerInterface;
use Core\Lang\LangInterface;
use Core\Module\ModuleInterface;
use Core\Route\RouterInterface;

class Module implements ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function register(ContainerInterface $container): void
    {
        //
    }

    /**
     * @inheritDoc
     */
    public function info(LangInterface $lang): array
    {
        return [
            'name'          => lang('info.name'),
            'description'   => lang('info.description'),
            'author'        => lang('info.author'),
            'version'       => '1.0.0',
        ];
    }

    /**
     * @inheritDoc
     */
    public function routes(RouterInterface $router): void
    {
        $router->loadFile(__DIR__ . '/routes.php');
    }
}
