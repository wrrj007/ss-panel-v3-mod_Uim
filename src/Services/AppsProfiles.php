<?php

namespace App\Services;

class AppsProfiles
{
    /**
     * Surge 策略组配置
     *
     * @return array
     */
    public static function Surge()
    {
        return [
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
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy']
                        ]
                    ],
                    [
                        'name' => '🍎 Only',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy']
                        ]
                    ],
                    [
                        'name' => '☁️ Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🍃 Proxy', '🍂 Domestic']
                        ]
                    ]
                ]
            ]
        ];
    }

    /**
     * Surfboard 策略组配置
     *
     * @return array
     */
    public static function Surfboard()
    {
        return [
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
                            'left-proxies' => ['🚀 Direct', '🍃 Proxy']
                        ]
                    ],
                    [
                        'name' => '☁️ Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['🍃 Proxy', '🍂 Domestic']
                        ]
                    ]
                ]
            ]
        ];
    }

    /**
     * Clash 策略组配置
     *
     * @return array
     */
    public static function Clash()
    {
        return [
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
                            'left-proxies' => ['DIRECT', 'Proxy']
                        ]
                    ],
                    [
                        'name' => 'AsianTV',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['Domestic', 'Proxy']
                        ]
                    ],
                    [
                        'name' => 'GlobalTV',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['Proxy']
                        ]
                    ],
                    [
                        'name' => 'Others',
                        'type' => 'select',
                        'content' => [
                            'left-proxies' => ['Proxy', 'Domestic']
                        ]
                    ]
                ]
            ]
        ];
    }
}
