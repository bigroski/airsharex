<?php

namespace App\Services;

use App\Exceptions\ApiErrorException;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('api.asx.api_base_url'),
            'timeout'  => 5.0,
        ]);
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

            $response = $this->client->post('/api/v1/auth/Authenticate', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);
            logger('auth data response', [$response]);
            $responseData = json_decode($response->getBody()->getContents(), true);
            session(['asx_api_token' => $responseData['ResultData']['AccessToken']]);

            return $responseData;
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }


    public function getCity()
    {
        try {
            $response = $this->client->get('/api/v1/common/GetCity', [
                'verify' => false,
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);
            $result = json_decode($response->getBody()->getContents(), true);
            return $result['ResultData']['City'] ?? $result['ResultData']['City'];
        } catch (RequestException $e) {

            logger("Get city error messAGE" . $e->getMessage());
            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function getSalutation()
    {
        try {

            $response = $this->client->get('/api/v1/common/GetSalutation', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);
            $result = json_decode($response->getBody()->getContents(), true);

            return $result['ResultData']['Salutation'] ?? $result['ResultData']['Salutation'];

            $result = json_decode($response->getBody()->getContents());
dd($result);
            return $result;
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function getHeliOperator()
    {
        try {

            $response = $this->client->get('/v1/common/GetHeliOperator', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            return $result['ResultData']['HeliOperator'] ?? $result['ResultData']['HeliOperator'];
        } catch (RequestException $e) {


            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function getNationality()
    {
        try {

            $response = $this->client->get('/api/v1/common/GetNationality', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);
            // dd($result);
            return $result['ResultData']['Nationality'] ?? $result['ResultData']['Nationality'];
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function getGender()
    {
        try {

            $response = $this->client->get('/api/v1/common/GetGender', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            return $result['ResultData']['Gender'] ?? $result['ResultData']['Gender'];

        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    //search trip
    public function serchTrip($data)
    {

        try {
            if (session()->has('asx_api_token')) {
                // Key exists, do something with the value
            } else {
                // Key doesn't exist, call your method
                $this->authenticate();
            }
            $apiToken = session()->get('asx_api_token');

            $response = $this->client->post('/api/v1/trips/SearchTrip', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'authentication-token' => $apiToken,
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);

            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function tripDetails($data)
    {
        try {
            // if (session()->has('asx_api_token')) {
            // } else {
                $this->authenticate();
            // }
            $apiToken = session()->get('asx_api_token');
            logger('token'.$apiToken);
            $response = $this->client->post('/api/v1/booking/GetTripDetail', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'authentication-token' => $apiToken,
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);
            $result = $response->getBody()->getContents();
            return json_decode($result, true);
        } catch (RequestException $e) {

            logger($e);
            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function GetRoute($data)
    {

        try {

            $response = $this->client->get('/GetRoute', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);

            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function serchMyTrip($data)
    {

        try {

            $response = $this->client->post('/v1/MYTrip/SearchMYTripV1', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);

            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }

    public function registerCustomer($data)
    {
        try {


            if (session()->has('asx_api_token')) {
            } else {
                $this->authenticate();
            }
            $apiToken = session()->get('asx_api_token');
            logger('token'.$apiToken);
           
            $response = $this->client->post('/api/v1/customers/Register', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),                    
                    'authentication-token' => $apiToken,
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);

            logger('Register cutomer api response', [$response]);
            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            logger('erorr in api', [$e]);
            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    /**
     * @postdata
     *      "SearchMasterId": "string",
     *      "QueueId": "string",
     *      "RouteId": 0,
     *      "PartnerClientId": "string"
     * 
     */

    public function selectTrip($data)
    {
        try {

            $response = $this->client->post('/v1/MYTrip/SelectMYTripV1', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);

            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function bookTrip($data)
    {
        try {

            // if (!session()->has('asx_api_token')) {

                $this->authenticate();
            // }
            $apiToken = session()->get('asx_api_token');
            // dump($data);
            $response = $this->client->post('/api/v1/booking/BookTrip', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'authentication-token' => $apiToken,
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);
            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function GetTicket($data)
    {

        try {

            if (!session()->has('asx_api_token')) {

                $this->authenticate();
            }
            $apiToken = session()->get('asx_api_token');

            $response = $this->client->post('/GetTicket', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'authentication-token' => $apiToken,
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);
            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
    public function ConfirmBooking($data)
    {

        try {

            if (!session()->has('asx_api_token')) {

                $this->authenticate();
            }
            $apiToken = session()->get('asx_api_token');

            $response = $this->client->post('/ConfirmBooking', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'authentication-token' => $apiToken,
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);

            $result = $response->getBody()->getContents();

            return json_decode($result, true);
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }

    public function getHeliServiceTypes()
    {
        try {

            $response = $this->client->get('/api/v1/common/GetHeliServiceType', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            return $result['ResultData']['Nationality'] ?? $result['ResultData']['HeliServiceType'];
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new ApiErrorException($e->getResponse()->getBody()->getContents());
            }
            throw new ApiErrorException('Unable to complete the request');
        }
    }
}
