<?php

// +----------------------------------------------------------------------
// | 缓存设置
// +----------------------------------------------------------------------

return [
    // 默认缓存驱动
    'default' => env('cache.driver', 'file'),

    // 缓存连接方式配置
    'stores' => [
        'file' => [
            // 驱动方式
            'type' => 'File',
            // 缓存保存目录
            'path' => '',
            // 缓存前缀
            'prefix' => '',
            // 缓存有效期 0表示永久缓存
            'expire' => 0,
            // 缓存标签前缀
            'tag_prefix' => 'tag:',
            // 序列化机制 例如 ['serialize', 'unserialize']
            'serialize' => [],
        ],
        'redis' => [
            // 驱动方式
            'type' => 'redis',
            // 服务器地址
            'host' => '47.101.146.135',
            // redis密码：如果没有设置就为空//这个不知道为啥，我的服务器是有密码的 但是有密码连接不上
            'password' => '',
            // 服务器端口
            'port' => '6379'
        ]
        // 更多的缓存连接
    ],
];
