<?php

return [
    'slug' => 'Admin panel',

    'navigation' => 'Navigation',

    'tabs' => [
        //
    ],

    'nav_menu' => [
        [
            'name' => 'Dashboard',
            'link' => route('admin_show_dashboard'),
            'icon' => 'mdi-home',
        ],
        [
            'name' => 'Users',
            'link' => route('admin_show_users'),
            'icon' => 'mdi-account-group',
        ],
        [
            'name' => 'Posts',
            'link' => route('admin_show_posts'),
            'icon' => 'mdi-post'
        ],
        [
            'name' => 'Settings',
            'link' => route('admin_show_settings'),
            'icon' => 'mdi-cog',
        ],
        [
            'name' => 'Modules',
            'link' => route('admin_show_modules'),
            'icon' => 'mdi-view-module',
        ],
        [
            'name' => 'Theme',
            'link' => route('admin_show_theme'),
            'icon' => 'mdi-view-compact',
        ],
    ],
];
