<?php

return [
    'taglines' => [
        'header' => env('HEADER_TAGLINE', ''),
        'footer' => env('FOOTER_TAGLINE', ''),
    ],

    'topics_enabled' => env('TOPICS_ENABLED', true),

    'meta' => [
        'title' => 'MicroBlog',
        'description' => 'Gian Akbar is a web developer with experience using PHP and JavaScript in Bandung, Jawa Barat.',
    ],

    'cdn' => [
        'url' => env('CDN_URL'),
        'enabled' => env('CDN_ENABLED', false),
    ],

    'about' => [
        'name' => 'Gian Akbar',
        'subtitle' => 'Web Developer in Bandung, Jawa Barat',
        'description' => 'My name is Gian/ My experience is mostly based around PHP, CodeIgniter & Laravel',
        'meta' => [
            'title' => 'MicroBlog',
            'description' => 'Gian Akbar is a web developer with experience using PHP and JavaScript in Bandung, Jawa Barat.',
        ],
    ]
];

