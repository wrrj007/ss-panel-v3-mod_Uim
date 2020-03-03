<?php

$_ENV['Surge_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel'                    => 'notify',
            'dns-server'                  => 'system, 117.50.10.10, 119.29.29.29, 223.6.6.6',
            'skip-proxy'                  => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            'external-controller-access'  => 'China@0.0.0.0:8233',
            'allow-wifi-access'           => 'true',
            'enhanced-mode-by-rule'       => 'false',
            'exclude-simple-hostnames'    => 'true',
            'show-error-page-for-reject'  => 'true',
            'ipv6'                        => 'true',
            'replica'                     => 'false',
            'http-listen'                 => '0.0.0.0:8234',
            'socks5-listen'               => '0.0.0.0:8235',
            'wifi-access-http-port'       => 6152,
            'wifi-access-socks5-port'     => 6153,
            'internet-test-url'           => 'http://baidu.com',
            'proxy-test-url'              => 'http://www.qualcomm.cn/generate_204',
            'test-timeout'                => 3
        ],
        'Proxy' => [
            '🚀直接连接 = direct'
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量'
                    ]
                ]
            ]
        ],
        'Rule' => [
            'source' => 'surge/default.tpl'
        ]
    ]
];

$_ENV['Surge2_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel'                   => 'notify',
            'ipv6'                       => 'true',
            'replica'                    => 'false',
            'dns-server'                 => 'system, 119.29.29.29, 223.5.5.5',
            'skip-proxy'                 => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            'bypass-system'              => 'true',
            'allow-wifi-access'          => 'true',
            'external-controller-access' => 'ChinaX@0.0.0.0:8233'
        ],
        'Proxy' => [
            '🚀直接连接 = direct'
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量'
                    ]
                ]
            ]
        ],
        'Rule' => [
            'source' => 'surge2/default.tpl'
        ]
    ]
];

$_ENV['Clash_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'port'                => 7890,
            'socks-port'          => 7891,
            'redir-port'          => 7892,
            'allow-lan'           => false,
            'mode'                => 'Rule',
            'log-level'           => 'silent',
            'external-controller' => '0.0.0.0:9090',
            'secret'              => ''
        ],
        'Proxy' => [],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量'
                    ]
                ]
            ],
            [
                'name' => '🚀直接连接',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'DIRECT'
                    ]
                ]
            ]
        ],
        'Rule' => [
            'source' => 'clash/default.tpl'
        ]
    ]
];

$_ENV['Surfboard_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel'   => 'notify',
            'dns-server' => 'system, 119.29.29.29, 223.5.5.5',
            'skip-proxy' => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
        ],
        'Proxy' => [
            '🚀直接连接 = direct'
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ]
        ],
        'Rule' => [
            'source' => 'surfboard/default.tpl'
        ]
    ]
];
