<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    'asx' => [
        'api_base_url'=>env('ASX_API_BASE_URL','https://uatapi.airsharex.com'),
        // 'api_base_url'=>env('ASX_API_BASE_URL','https://uat.api.airsharex.com/api'),
        
        'username' => env('ASX_USERNAME'),
        'password' => env('ASX_PASSWORD'),
        'access_code' => env('ASX_ACCESSCODE'),
        'requested_by' => env('ASX_REQUESTEDBY'),
        'api_key' => env('ASX_API_KEY'),
        'agent_code' => env('ASX_AGENT_CODE'),
    ]
];
