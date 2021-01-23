<?php

declare(strict_types=1);

namespace Slimcms\Admin_panel\Controllers;

use Core\Models\User;
use Core\View\ViewerInterface;
use DI\Annotation\Inject;

class AdminController
{
    /**
     * @Inject
     * @var ViewerInterface
     */
    protected $viewer;

    public function show_dashboard()
    {
        return $this->viewer->html('admin/structure');
    }

    public function show_users()
    {
        return $this->viewer->html('admin/structure');
    }

    public function show_settings()
    {
        return $this->viewer->html('admin/structure');
    }

    public function show_theme()
    {
        return $this->viewer->html('admin/structure');
    }

    public function show_posts()
    {
        return $this->viewer->html('admin/structure');
    }
}
