<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Elasticsearch Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the elasticsearch connections below
    | you wish to use as your default connection for all elasticsearch instance.
    | Of course you may use many connections at once using
    | the Elasticsearch library.
    |
    */

    'default' => env('ES_CONNECTION', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Elasticsearch Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the elasticsearch connections setup for your application.
    |
    */

    'connections' => [

        'default' => [
            'hosts' => [
                [
                    'host' => env('ES_HOST', 'localhost'),
                    'port' => env('ES_PORT', 9200),
                    'scheme' => env('ES_SCHEME', null),
                    'user' => env('ES_USER', null),
                    'pass' => env('ES_PASS', null),

                    // If you are connecting to an Elasticsearch instance on AWS, you will need these values as well
                    'aws' => env('AWS_ELASTICSEARCH_ENABLED', false),
                    'aws_region' => env('AWS_REGION', ''),
                    'aws_key' => env('AWS_ACCESS_KEY_ID', ''),
                    'aws_secret' => env('AWS_SECRET_ACCESS_KEY', ''),
                ],
            ],

            'logging' => [
                'driver' => null,

                'drivers' => [
                    'default' => [
                        'path' => storage_path('logs/elasticsearch.log'),
                        'level' => Monolog\Logger::INFO,
                    ],

                    'logger' => [
                        'channel' => 'daily',
                    ],
                ],
            ],

            'ssl_verification' => null,
            'retries' => null,
            'sniff_on_start' => false,
            'http_handler' => null,
            'connection_pool' => null,
            'connection_selector' => null,
            'serializer' => null,
            'connection_factory' => null,
            'endpoint' => null,
            'namespaces' => [],
        ],

    ],
];