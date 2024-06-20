<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct(private ApiService $apiService)
    {
    }

    public function authenticate()
    {

        try {
            $data =  [
                "UserName" => config('api.asx.username'),
                "Password" => config('api.asx.password'),
                "AccessCode" => config('api.asx.access_code'),
                "RequestedBy" => config('api.asx.requested_by'),
            ];

            $response = $this->apiService->authenticate($data);

            if (isset($response['token'])) {
                session(['asx_api_token' => $response['token']]);
                logger('login success', ['token' => $response['token']]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}


$data =  [
    "UserName":'AsxWeb',
    "Password": 'AirWeb@852',
    "AccessCode": 'AC45A87',
    "RequestedBy": 'AC45A87',
];