<?php

return [
    'sts' => [
        'key' => env('ALIYUN_STS_ACCESS_KEY_ID'),
        'secret' => env('ALIYUN_STS_ACCESS_KEY_SECRET'),
        'name' => env('ALIYUN_STS_CLIENT_NAME'),
        'debug' => env('ALIYUN_STS_DEBUG', false),

//        'connection_timeout' => env('ALIYUN_STS_CONNECTION_TIMEOUT'),
//        'timeout' => env('ALIYUN_STS_TIMEOUT'),

        'cert' => [
            //
        ],
        'options' => [
            //
        ],
    ],
];
