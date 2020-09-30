<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Documentations Path
     |--------------------------------------------------------------------------
     |
     | Docdress stores its documentation files in ./resources/docs by default.
     | You may change the path to where your documentation files are located.
     |
     */

    'path' => resource_path('docs'),

    /*
     |--------------------------------------------------------------------------
     | Docdress Settings
     |--------------------------------------------------------------------------
     |
     | Specify wether external links should be opened in a new tab.
     |
     */

    'open_external_links_in_new_tab' => true,

    /*
     |--------------------------------------------------------------------------
     | Docdress Repositories
     |--------------------------------------------------------------------------
     |
     | All GitHub repositories containing documentations are specified here.
     |
     */

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
                'master' => '3.x',
                '3.x'    => '3.x',
                '2.4'    => '2.4',
            ],
        ],
    ],

    /*
     |--------------------------------------------------------------------------
     | Docdress Themes
     |--------------------------------------------------------------------------
     |
     | The themes that are specified here are available for repository
     | documentations. When no spcific theme is given, the "default" theme is
     | used.
     |
     */

    'themes' => [
        'default' => [
            'primary' => '#4951f2',

            'code-bg'            => '#f5f8fb',
            'code-selection'     => '#b3d4fc',
            'code-value'         => '#055472',
            'code-prop'          => '#d44545',
            'code-function'      => '#4951f2',
            'code-variable'      => '#588bbd',
            'code-string'        => '#169f0c',
            'code-default-color' => '#090910',
            'code-punctuation'   => '#055472',

            'algolia-icon-color' => '#090910',
        ],
    ],
];
