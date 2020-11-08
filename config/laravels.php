<?php
/**
 * @see https://github.com/hhxsv5/laravel-s/blob/master/Settings-CN.md  Chinese
 * @see https://github.com/hhxsv5/laravel-s/blob/master/Settings.md  English
 */
return [
    'listen_ip'                => env('LARAVELS_LISTEN_IP', '127.0.0.1'),
    'listen_port'              => env('LARAVELS_LISTEN_PORT', 5200),
    'socket_type'              => defined('SWOOLE_SOCK_TCP') ? SWOOLE_SOCK_TCP : 1,
    'enable_coroutine_runtime' => false,
    'server'                   => env('LARAVELS_SERVER', 'LaravelS'),
    'handle_static'            => env('LARAVELS_HANDLE_STATIC', false),
    'laravel_base_path'        => env('LARAVEL_BASE_PATH', base_path()),
    'inotify_reload'           => [
        'enable'        => env('LARAVELS_INOTIFY_RELOAD', false),
        'watch_path'    => base_path(),
        'file_types'    => ['.php'],
        'excluded_dirs' => [],
        'log'           => true,
    ],
    'event_handlers'           => [],
    'websocket'                => [
        'enable' => true,
        'handler' => \App\Services\Swoole\WebSocketService::class,
        // 表示每60秒遍历一次，一个连接如果600秒内未向服务器发送任何数据，此连接将被强制关闭
//        'heartbeat_idle_time'      => 600,
//        'heartbeat_check_interval' => 60,
    ],
//    'sockets'                  => [],
    'sockets' => [
//        [
//            'enable'   => true, // 是否启用，默认为true
//            'host'     => '0.0.0.0',
//            'port'     => 5555,
//            'type'     => SWOOLE_SOCK_TCP,// 支持的嵌套字类型：https://wiki.swoole.com/#/consts?id=socket-%e7%b1%bb%e5%9e%8b
//            'settings' => [// Swoole可用的配置项：https://wiki.swoole.com/#/server/port?id=%e5%8f%af%e9%80%89%e5%8f%82%e6%95%b0
//                'open_eof_check' => true,
//                'package_eof'    => "\r\n",
//            ],
//            'handler'  => \App\Services\Swoole\Sockets\TestTcpSocket::class,
//        ],
//        [
//            'enable'   => true, // 是否启用，默认为true
//            'host'     => '0.0.0.0',
//            'port'     => 6666,
//            'type'     => SWOOLE_SOCK_UDP,
//            'settings' => [
//                'open_eof_check' => true,
//                'package_eof'    => "\r\n",
//            ],
//            'handler'  => \App\Services\Swoole\Sockets\TestUdpSocket::class,
//        ],
//        [
//            'enable'   => true, // 是否启用，默认为true
//            'host'     => '0.0.0.0',
//            'port'     => 7777,
//            'type'     => SWOOLE_SOCK_TCP,
//            'settings' => [
//                'open_http_protocol' => true,
//            ],
//            'handler'  => \App\Services\Swoole\Sockets\TestHttp::class,
//        ],
//        [
//            'enable'   => true, // 是否启用，默认为true
//            'host'     => '0.0.0.0',
//            'port'     => 8888,
//            'type'     => SWOOLE_SOCK_TCP,
//            'settings' => [
//                'open_http_protocol'      => true,
//                'open_websocket_protocol' => true,
//            ],
//            'handler'  => \App\Services\Swoole\Sockets\TestWebSocket::class,
//        ],
    ],

    'processes'                => [
        [
            'enable'   => false,  // 是否启用，默认true
            'class'    => \App\Services\Swoole\Processes\TestProcesses::class,
            'redirect' => false, // 是否重定向输入输出
            'pipe'     => 0,     // 管道类型：0不创建管道，1创建SOCK_STREAM类型管道，2创建SOCK_DGRAM类型管道
            'queue'    => [ // 启用消息队列作为进程间通信，配置空数组表示使用默认参数
                'msg_key'  => 0,    // 消息队列的KEY，默认会使用ftok(__FILE__, 1)
                'mode'     => 2,    // 通信模式，默认为2，表示争抢模式
                'capacity' => 8192, // 单个消息长度，长度受限于操作系统内核参数的限制，默认为8192，最大不超过65536
            ],
        ],
    ],
    'timer'                    => [
        'enable'        => env('LARAVELS_TIMER', false),
        'jobs'          => [
            // Enable LaravelScheduleJob to run `php artisan schedule:run` every 1 minute, replace Linux Crontab
            //\Hhxsv5\LaravelS\Illuminate\LaravelScheduleJob::class,
            // Two ways to configure parameters:
            // [\App\Jobs\XxxCronJob::class, [1000, true]], // Pass in parameters when registering
            // \App\Jobs\XxxCronJob::class, // Override the corresponding method to return the configuration
        ],
        'max_wait_time' => 5,
    ],
    'swoole_tables'            => [

        'ws' => [
            'size'   => 102400,//Table的最大行数
            'column' => [// Table的列定义
                [
                    'name' => 'value',
                    'type' => \Swoole\Table::TYPE_INT,
                    'size' => 8
                ],
            ],
        ],

        // 场景：WebSocket中UserId与FD绑定
        'demo'   => [// Key为Table名称，使用时会自动添加Table后缀，避免重名。这里定义名为wsTable的Table
            'size'   => 102400,//Table的最大行数
            'column' => [// Table的列定义
                [
                    'name' => 'id',
                    'type' => \Swoole\Table::TYPE_INT,
                    'size' => 8
                ],
                [
                    'name' => 'name',
                    'type' => \Swoole\Table::TYPE_STRING,
                    'size' => 256
                ],
                [
                    'name' => 'avatar',
                    'type' => \Swoole\Table::TYPE_STRING,
                    'size' => 256
                ],
            ],
        ],



    ],
    'register_providers'       => [],
    'cleaners'                 => [
        // See LaravelS's built-in cleaners: https://github.com/hhxsv5/laravel-s/blob/master/Settings.md#cleaners
    ],
    'destroy_controllers'      => [
        'enable'        => false,
        'excluded_list' => [
            //\App\Http\Controllers\TestController::class,
        ],
    ],
    'swoole'                   => [
        'daemonize'          => env('LARAVELS_DAEMONIZE', false),
        'dispatch_mode'      => 2,
        'reactor_num'        => env('LARAVELS_REACTOR_NUM', function_exists('swoole_cpu_num') ? swoole_cpu_num() * 2 : 4),
        'worker_num'         => env('LARAVELS_WORKER_NUM', function_exists('swoole_cpu_num') ? swoole_cpu_num() * 2 : 8),
        //'task_worker_num'    => env('LARAVELS_TASK_WORKER_NUM', function_exists('swoole_cpu_num') ? swoole_cpu_num() * 2 : 8),
        'task_ipc_mode'      => 1,
        'task_max_request'   => env('LARAVELS_TASK_MAX_REQUEST', 8000),
        'task_tmpdir'        => @is_writable('/dev/shm/') ? '/dev/shm' : '/tmp',
        'max_request'        => env('LARAVELS_MAX_REQUEST', 8000),
        'open_tcp_nodelay'   => true,
        'pid_file'           => storage_path('laravels.pid'),
        'log_file'           => storage_path(sprintf('logs/swoole-%s.log', date('Y-m'))),
        'log_level'          => 4,
        'document_root'      => base_path('public'),
        'buffer_output_size' => 2 * 1024 * 1024,
        'socket_buffer_size' => 128 * 1024 * 1024,
        'package_max_length' => 4 * 1024 * 1024,
        'reload_async'       => true,
        'max_wait_time'      => 60,
        'enable_reuse_port'  => true,
        'enable_coroutine'   => false,
        'http_compression'   => false,

        // Slow log
        // 'request_slowlog_timeout' => 2,
        // 'request_slowlog_file'    => storage_path(sprintf('logs/slow-%s.log', date('Y-m'))),
        // 'trace_event_worker'      => true,

        /**
         * More settings of Swoole
         * @see https://wiki.swoole.com/#/server/setting  Chinese
         * @see https://www.swoole.co.uk/docs/modules/swoole-server/configuration  English
         */
    ],
];
