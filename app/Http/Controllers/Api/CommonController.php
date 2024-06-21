<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;

class CommonController extends Controller
{
    public function __construct(private ApiService $apiService)
    {
        
    }
    public function city() {
        try {
            
            $response = $this->apiService->getCity();
            return $response;

        } catch (\Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
