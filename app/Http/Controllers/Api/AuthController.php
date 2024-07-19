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
            

            $response = $this->apiService->authenticate();

            if (isset($response['token'])) {
                logger('login success', ['token' => $response['token']]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}

