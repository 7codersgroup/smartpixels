<?php

return [

    /*
    |--------------------------------------------------------------------------
    |   Your auth0 domain
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'domain' => 'dev-g5dxikbh.auth0.com',

    /*
    |--------------------------------------------------------------------------
    |   Your APP id
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'client_id' => '7szN10Ws0LvveDp8Qc3K4YYiWk26iYt8',

    /*
    |--------------------------------------------------------------------------
    |   Your APP secret
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'client_secret' => 'Ms2vxlxAM_sO_nfGIcwF4F41hNjQLRzzs5AdEYBNKUZ7-bHzBKUJCg8NT6NSO1pn',

    /*
     |--------------------------------------------------------------------------
     |   The redirect URI
     |--------------------------------------------------------------------------
     |   Should be the same that the one configure in the route to handle the
     |   'Auth0\Login\Auth0Controller@callback'
     |
     */
    'redirect_uri' => env('APP_URL') . '/auth0/callback',

    /*
    |--------------------------------------------------------------------------
    |   Persistence Configuration
    |--------------------------------------------------------------------------
    |   persist_user            (Boolean) Optional. Indicates if you want to persist the user info, default true
    |   persist_access_token    (Boolean) Optional. Indicates if you want to persist the access token, default false
    |   persist_refresh_token   (Boolean) Optional. Indicates if you want to persist the refresh token, default false
    |   persist_id_token        (Boolean) Optional. Indicates if you want to persist the id token, default false
    |
    */
    'persist_user' => true,
    'persist_access_token' => false,
    'persist_refresh_token' => false,
    'persist_id_token' => false,

    /*
    |--------------------------------------------------------------------------
    |   The authorized token issuers
    |--------------------------------------------------------------------------
    |   This is used to verify the decoded tokens when using RS256
    |
    */
    'authorized_issuers'  => [ env( 'AUTH0_DOMAIN' ) ],

    /*
    |--------------------------------------------------------------------------
    |   The authorized token audiences
    |--------------------------------------------------------------------------
    |
    */
    // 'api_identifier'  => '',

    /*
    |--------------------------------------------------------------------------
    |   The secret format
    |--------------------------------------------------------------------------
    |   Used to know if it should decode the secret when using HS256
    |
    */
    'secret_base64_encoded'  => false,

    /*
    |--------------------------------------------------------------------------
    |   Supported algorithms
    |--------------------------------------------------------------------------
    |   Token decoding algorithms supported by your API
    |
    */
    'supported_algs'        => [ 'RS256' ],

    /*
    |--------------------------------------------------------------------------
    |   Guzzle Options
    |--------------------------------------------------------------------------
    |   guzzle_options    (array) optional. Used to specify additional connection options e.g. proxy settings
    |
    */
    // 'guzzle_options' => []
];
