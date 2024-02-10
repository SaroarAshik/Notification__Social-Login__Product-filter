<?php

return [

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '2311783935676748',
        'client_secret' => 'da63687c6cac205ecd7388149bd1d13b',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],
     'github' => [
        'client_id' => 'e725f1f6352b4cadfe11',
        'client_secret' => '7d6fdb5e579ed99acb614913d1c594ed9cdf9a22',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],
    

];