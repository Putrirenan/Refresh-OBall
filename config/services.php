<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'google' => [
        'client_id' => '615278265603-gcvvh2ke8rv2d21st0itgdjak8c7c6n2.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/callback',
    ],
    'facebook' => [
        'client_id' => '3343837199234418',
        'client_secret' => '409697bd8ebb967a4b9929efc6ffa908',
        'redirect' => 'http://localhost:8000/fb/callback',
    ],

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

];
