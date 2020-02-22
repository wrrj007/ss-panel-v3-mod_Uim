<?php

$_ENV['Surge_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel' => 'notify',
            'dns-server' => 'system, 117.50.10.10, 119.29.29.29, 223.6.6.6',
            'skip-proxy' => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10,
              17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            'external-controller-access' => 'China@0.0.0.0:8233',
            'allow-wifi-access' => 'true',
            'enhanced-mode-by-rule' => 'false',
            'exclude-simple-hostnames' => 'true',
            'show-error-page-for-reject' => 'true',
            'ipv6' => 'true',
            'replica' => 'false',
            'http-listen' => '0.0.0.0:8234',
            'socks5-listen' => '0.0.0.0:8235',
            'wifi-access-http-port' => 6152,
            'wifi-access-socks5-port' => 6153,
            'internet-test-url' => 'http://baidu.com',
            'proxy-test-url' => 'http://www.qualcomm.cn/generate_204',
            'test-timeout' => 3
        ],
        'Proxy' => [
            '🚀 Direct = direct'
        ],
        'ProxyGroup' => [
            [
                'name' => '🍃 Proxy',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)'
                ]
            ],
            [
                'name' => '🍂 Domestic',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀 Direct',
                        '🍃 Proxy'
                    ]
                ]
            ],
            [
                'name' => '🍎 Only',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀 Direct',
                        '🍃 Proxy'
                    ]
                ]
            ],
            [
                'name' => '☁️ Others',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🍃 Proxy',
                        '🍂 Domestic'
                    ]
                ]
            ]
        ],
        'Rule' => [
            'source' => ''
        ]
    ]
];

$_ENV['Surfboard_Profiles'] = [
    'default' => [
        'Checks' => [],
        'ProxyGroup' => [
            [
                'name' => '🍃 Proxy',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)'
                ]
            ],
            [
                'name' => '🍂 Domestic',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀 Direct',
                        '🍃 Proxy'
                    ]
                ]
            ],
            [
                'name' => '☁️ Others',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🍃 Proxy',
                        '🍂 Domestic'
                    ]
                ]
            ]
        ]
    ]
];

$_ENV['Clash_Profiles'] = [
    'default' => [
        'Checks' => [],
        'ProxyGroup' => [
            [
                'name' => 'Proxy',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)'
                ]
            ],
            [
                'name' => 'Domestic',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'DIRECT',
                        'Proxy'
                    ]
                ]
            ],
            [
                'name' => 'AsianTV',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'Domestic',
                        'Proxy'
                    ]
                ]
            ],
            [
                'name' => 'GlobalTV',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'Proxy'
                    ]
                ]
            ],
            [
                'name' => 'Others',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'Proxy',
                        'Domestic'
                    ]
                ]
            ]
        ]
    ]
];
