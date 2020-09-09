<?php

return [
    'path' => resource_path('docs'),

    'open_external_links_in_new_tab' => true,

    'repos' => [
        'litstack/docs' => [
            'route_prefix'        => 'docs',
            'subfolder'           => null,
            'default_page'        => 'installation',
            'default_version'     => 'master',
            'webhook_token'       => env('WEBHOOK_TOKEN', null),
            'algolia_app_key'     => env('ALGOLIA_APP_KEY', null),
            'google_analytics_id' => 'UA-177622585-1',
            'title'               => 'Litstack - The Administration Framework For Laravel',
            'versions'            => [
                'master' => '3.0',
                '2.4'    => '2.4',
            ],
        ],
    ],

    'themes' => [
        'default' => [
            'primary'            => '#4951f2',
            'code-bg'            => '#f5f8fb',
            'code-selection'     => '#b3d4fc',
            'code-value'         => '#055472',
            'code-prop'          => '#d44545',
            'code-function'      => '#4951f2',
            'code-variable'      => '#588bbd',
            'code-string'        => '#169f0c',
            'code-default-color' => '#090910',
        ],
    ],
];
