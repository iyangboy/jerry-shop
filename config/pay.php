<?php

return [
    'alipay' => [
        'app_id'         => env('ALIPAY_APP_ID', ''),
        'ali_public_key' => env('ALIPAY_PUBLIC_KEY', ''),
        'private_key'    => env('ALIPAY_PRIVATE_KEY', ''),
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wxd85b6c50ba814b52',
        'mch_id'      => '1564157731',
        'key'         => 'DatojfIRsZVjTaFgcMd0rD4oonN3IYkF',
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
