<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cloudinary API configuration
    |--------------------------------------------------------------------------
    |
    | Before using Cloudinary you need to register and get some detail
    | to fill in below, please visit cloudinary.com.
    |
    */

    'cloudName' => 'fricapix',
    'baseUrl' => env('CLOUDINARY_BASE_URL', 'http://res.cloudinary.com/' . 'fricapix'),
    'secureUrl' => env('CLOUDINARY_SECURE_URL', 'https://res.cloudinary.com/' . 'fricapix'),
    'apiBaseUrl' => env('CLOUDINARY_API_BASE_URL', 'https://api.cloudinary.com/v1_1/' . 'fricapix'),
    'apiKey' => '223297176269546',
    'apiSecret' => 'd9aR0T7su2KxF6uylpK9sUidYfo',

    'scaling' => [
        'format' => 'png',
        'width' => 150,
        'height' => 150,
        'crop' => 'fit',
        'effect' => null
    ],

];
