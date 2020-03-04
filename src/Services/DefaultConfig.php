<?php

namespace App\Services;

use App\Models\GConfig;

class DefaultConfig
{
    /**
     * 创建配置，成功返回 true
     *
     * @param string $key 键名
     *
     * @return void
     */
    public static function create($key)
    {
        $value = self::default_value($key);
        if ($value != null) {
            $new                 = new GConfig();
            $new->key            = $value['key'];
            $new->type           = $value['type'];
            $new->value          = $value['value'];
            $new->name           = $value['name'];
            $new->comment        = $value['comment'];
            $new->operator_id    = $value['operator_id'];
            $new->operator_name  = $value['operator_name'];
            $new->oldvalue       = '';
            $new->operator_email = '';
            $new->last_update    = time();
            if ($new->save()) {
                return true;
            }
        }
        return false;
    }

    /**
     * 创建并返回配置，如果该键名存在默认配置中
     *
     * @param string $key
     *
     * @return GConfig|null
     */
    public static function firstOrCreate($key)
    {
        return (self::create($key)
            ? GConfig::find($key)
            : null
        );
    }

    /**
     * 检查新增的配置并创建
     *
     * @return string
     */
    public static function detectConfigs()
    {
        $return = '开始检查新增的配置项...' . PHP_EOL;
        $configs = self::configs();
        foreach ($configs as $key => $value) {
            $config = GConfig::find($key);
            if ($config == null) {
                if (self::create($key)) {
                    $return .= '新增的配置项：' . $key . '：' . $value['name'] . PHP_EOL;
                } else {
                    $return .= $key . '：配置项创建失败，请检查错误' . PHP_EOL;
                }
            }
        }
        $return .= '以上是新增的配置项...' . PHP_EOL;

        return $return;
    }

    /**
     * 默认配置，新增配置请添加到此处
     *
     * @param string $key 键名
     *
     * @return array
     */
    public static function configs($key = null)
    {
        $configs = [
            'Telegram.enable.Diary' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送系统今天的运行状况',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.Diary' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => ('各位老爷少奶奶，我来为大家报告一下系统今天的运行状况哈~' . PHP_EOL . '今日签到人数：%getTodayCheckinUser%' . PHP_EOL . '今日使用总流量：%lastday_total%' . PHP_EOL . '晚安~'),
                'name'          => '自定义向 Telegram 群组推送系统今天的运行状况的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[今日签到人数] %getTodayCheckinUser%' . PHP_EOL . '[今日使用总流量] %lastday_total%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.DailyJob' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送数据库清理的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.DailyJob' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '姐姐姐姐，数据库被清理了，感觉身体被掏空了呢~',
                'name'          => '自定义向 Telegram 群组推送数据库清理通知的信息',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.NodeOffline' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送节点掉线的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.NodeOffline' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '喵喵喵~ %node_name% 节点掉线了喵~',
                'name'          => '自定义向 Telegram 群组推送节点掉线通知的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[节点名称] %node_name%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.NodeOnline' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送节点上线的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.NodeOnline' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '喵喵喵~ %node_name% 节点恢复了喵~',
                'name'          => '自定义向 Telegram 群组推送节点上线通知的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[节点名称] %node_name%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.NodeGFW' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送节点被墙的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.NodeGFW' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '喵喵喵~ %node_name% 节点被墙了喵~',
                'name'          => '自定义向 Telegram 群组推送节点被墙通知的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[节点名称] %node_name%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.NodeGFW_recover' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送节点被墙恢复的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.NodeGFW_recover' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '喵喵喵~ %node_name% 节点恢复了喵~',
                'name'          => '自定义向 Telegram 群组推送节点被墙恢复通知的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[节点名称] %node_name%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.AddNode' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送节点新增的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.AddNode' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '新节点添加~ %node_name%',
                'name'          => '自定义向 Telegram 群组推送节点新增通知的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[节点名称] %node_name%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.UpdateNode' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送节点修改的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.UpdateNode' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '节点信息被修改~ %node_name%',
                'name'          => '自定义向 Telegram 群组推送节点修改通知的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[节点名称] %node_name%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],

            'Telegram.enable.DeleteNode' => [
                'key'           => $key,
                'type'          => 'bool',
                'value'         => 1,
                'name'          => '开启 Telegram 群组推送节点删除的通知',
                'comment'       => '',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
            'Telegram.msg.DeleteNode' => [
                'key'           => $key,
                'type'          => 'string',
                'value'         => '节点被删除~ %node_name%',
                'name'          => '自定义向 Telegram 群组推送节点删除通知的信息',
                'comment'       => '可用变量：' . PHP_EOL . '[节点名称] %node_name%',
                'operator_id'   => 0,
                'operator_name' => '系统默认',
            ],
        ];
        return ($key === null
            ? $configs
            : $configs[$key]
        );
    }

    /**
     * 恢复配置为默认值
     *
     * @param string $key 键名
     *
     * @return void
     */
    public static function default_value($key)
    {
        return self::configs($key);
    }
}
