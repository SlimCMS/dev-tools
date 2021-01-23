<?php

/**
 * @var \Core\Route\RouterInterface $router
 */

$router->get('/admin', ['AdminController', 'show_dashboard'], 'admin_show_dashboard');
$router->get('/admin/modules', ['ModuleController', 'show_modules'], 'admin_show_modules');
$router->get('/admin/users', ['AdminController', 'show_users'], 'admin_show_users');
$router->get('/admin/posts', ['AdminController', 'show_posts'], 'admin_show_posts');
$router->get('/admin/settings', ['AdminController', 'show_settings'], 'admin_show_settings');
$router->get('/admin/theme', ['AdminController', 'show_theme'], 'admin_show_theme');
