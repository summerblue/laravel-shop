<?php

return [
    'alipay' => [
        'app_id'         => env('ALIPAY_APP_ID'),
        'ali_public_key' => env('ALIPAY_PUBLIC_KEY'),
        'private_key'    => env('ALIPAY_PRIVATE_KEY'),
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => env('WECHAT_PAY_APP_ID'),
        'mch_id'      => env('WECHAT_PAY_MCH_ID'),
        'key'         => env('WECHAT_PAY_KEY'),
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
