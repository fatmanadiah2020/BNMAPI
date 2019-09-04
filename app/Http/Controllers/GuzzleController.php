<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class GuzzleController extends Controller
{
    public function getRemoteData(){

    	$headers = [
            'Accept' => "application/vnd.BNM.API.v1+json",
            'User-Agent'=>'PostmanRuntime/7.16.3',
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $r = $client->request('GET', 'https://api.bnm.gov.my/public/fx-turn-over');
        $response = $r->getBody()->getContents();
         echo $response;
    	

    
    /*
    $client = new GuzzleClient();
    $response = $client->request('GET', 'https://api.bnm.gov.my/public/base-rate', [
    'headers' => [
        'Accept' => 'application/vnd.BNM.API.v1+json',
    ]
    
]);
    		$data = $response->getBody();
			
			$data = json_decode($data);
			dd($data);
			'AccessToken' => 'key',
				'Authorization' => 'Bearer token',
			

				$headers = [
				'Content-Type' => 'application/json',
				'Accept' => 'application/vnd.BNM.API.v1+json',
				
				];

				$client = new GuzzleClient([
				'headers' => $headers
				]);

			

				$r = $client->Request('GET', 'https://api.bnm.gov.my/public/base-rate' ,[
    'headers' => [
        'Accept' => 'application/vnd.BNM.API.v1+json',
        		],
    ]);
				$response = $r->getBody()->getContents();
					dd($response);

			*/


  }
  public function getRemoteData2(){

    	$headers = [
            'Accept' => "application/vnd.BNM.API.v1+json",
            'User-Agent'=>'PostmanRuntime/7.16.3',
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $r = $client->request('GET', 'https://api.bnm.gov.my/public/base-rate');
        $response = $r->getBody()->getContents();
         echo $response;
    	

    
    /*
    $client = new GuzzleClient();
    $response = $client->request('GET', 'https://api.bnm.gov.my/public/base-rate', [
    'headers' => [
        'Accept' => 'application/vnd.BNM.API.v1+json',
    ]
    
]);
    		$data = $response->getBody();
			
			$data = json_decode($data);
			dd($data);
			'AccessToken' => 'key',
				'Authorization' => 'Bearer token',
			

				$headers = [
				'Content-Type' => 'application/json',
				'Accept' => 'application/vnd.BNM.API.v1+json',
				
				];

				$client = new GuzzleClient([
				'headers' => $headers
				]);

			

				$r = $client->Request('GET', 'https://api.bnm.gov.my/public/base-rate' ,[
    'headers' => [
        'Accept' => 'application/vnd.BNM.API.v1+json',
        		],
    ]);
				$response = $r->getBody()->getContents();
					dd($response);

			*/


  }
}