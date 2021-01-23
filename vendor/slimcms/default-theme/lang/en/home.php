<?php

return [
    'seo' => [
       'title' => 'LightCMS Project',
    ],

	'title' => 'Welcome to LightCMS',

    'btn_get_started' => 'Get started',

    'project' => 'Project',
    'by_lightCms' => 'by LightCMS',



    'articles' => [
        [
            'title' => 'User guide',
            'image' => asset('img/manual.png'),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus est ex maiores pariatur quod rem. Animi, at blanditiis consectetur dicta doloremque hic impedit inventore iste, iusto quo suscipit vitae voluptatum.',
        ],
        [
            'title' => 'Open source',
            'image' => asset('img/open-source.png'),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus est ex maiores pariatur quod rem. Animi, at blanditiis consectetur dicta doloremque hic impedit inventore iste, iusto quo suscipit vitae voluptatum.',
        ],
    ],

    'learn_more' => 'Learn more',

    'tabs' => [
        [
            'title' => 'Home',
            'is_active' => true,
            'link' => route('home'),
        ],
        [
            'title' => 'Download',
            'is_active' => false,
            'link' => route('download'),
        ],
        [
            'title' => 'Documentation',
            'is_active' => false,
            'link' => route('docs'),
        ],
    ],

    'cards' => [
        [
            'title' => 'Fast',
            'description' => 'Very fast CMS',
            'icon' => 'mdi-truck-fast',
        ],
        [
            'title' => 'Security',
            'description' => 'Good security CMS',
            'icon' => 'mdi-security',
        ],
        [
            'title' => 'Flexible',
            'description' => 'Good flexible CMS',
            'icon' => 'mdi-chart-bar-stacked',
        ],
    ],
];
