<?php

declare(strict_types=1);

namespace Slimcms\Admin_panel\Controllers;

use Core\View\ViewerInterface;
use DI\Annotation\Inject;

class ModuleController
{
    /**
     * @Inject()
     * @var ViewerInterface
     */
    protected $viewer;

    public function show_modules(): string
    {
        global $core;

        return $this->viewer->html('admin/show_modules', [
            'modules' => $core->moduleManager->getInfoModules(),
        ]);
    }
}
