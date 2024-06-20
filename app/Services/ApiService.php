<?php

namespace App\Services;

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

    public function authenticate($data)
    {
        try {
            $response = $this->client->post('/v1/Authenticate/Authenticate ', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ],
                'json' => $data
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
        }
    }


    public function getCity()
    {

        try {
            $response = $this->client->get('/v1/MYCommon/GetCity', [
                'headers' => [
                    'api-key'   => config('api.asx.api_key'),
                    'agentCode' => config('api.asx.agent_code'),
                    'Accept'    => 'application/json',
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);
            // dd($result->ResultData->City);
            return $result['ResultData']['City'];
        } catch (RequestException $e) {

            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
        }
    }
    public function getSalutation()
    {
        try {

            $response = $this->client->get('/v1/MYCommon/GetSalutation', [
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
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
        }
    }
    public function getNationality()
    {
        try {

            $response = $this->client->get('/v1/MYCommon/GetNationality', [
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
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
        }
    }
    public function getGender()
    {
        try {

            $response = $this->client->get('/v1/MYCommon/GetSalutation', [
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
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
        }
    }
    //search trip
    public function serchTrip($data)
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
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
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
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
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
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
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
                throw new Exception($e->getResponse()->getBody()->getContents());
            }
            throw new \Exception('Unable to complete the request');
        }
    }
}
