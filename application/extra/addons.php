<?php

return [
    'autoload' => false,
    'hooks' => [
        'admin_login_init' => [
            'loginbg',
        ],
        'config_init' => [
            'nkeditor',
        ],
        'sms_send' => [
            'smsbao',
        ],
        'sms_notice' => [
            'smsbao',
        ],
        'sms_check' => [
            'smsbao',
        ],
    ],
    'route' => [
        '/example$' => 'example/index/index',
        '/example/d/[:name]' => 'example/demo/index',
        '/example/d1/[:name]' => 'example/demo/demo1',
        '/example/d2/[:name]' => 'example/demo/demo2',
    ],
    'priority' => [],
];
