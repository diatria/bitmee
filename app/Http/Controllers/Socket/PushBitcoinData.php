<?php

namespace App\Http\Controllers\Socket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

// Helper
use App\Helper\HttpHelper;

class PushBitcoinData extends Controller
{
    public function pushData()
    {	
    	$client = new Client;
    	$res = $client->request('GET', HttpHelper::BitcoinApi()."/api/webdata/XRPBTC", [
		    'auth' => ['user', 'pass']
		]);
		return json_decode($res->getBody(), true);
    }
}
