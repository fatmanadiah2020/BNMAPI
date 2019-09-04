<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;


class GuzzleController extends Controller
{
    public function getRemoteData(){

    	$client = new GuzzleClient([

    		'headers' => ['content-type' => 'application/json' ,'Accept' => 'application/vnd.BNM.API.v1+json']
    	]);

		$response =$client->request('GET','https://api.bnm.gov.my/public/base-rate',[
			'json' => [
						'code' => '',
					 ]

		]);

			$data = $response->getBody();
			$rr=$data->getContents();
			$data1 = json_decode($data,true);
			dd($rr);
		
    	

    
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