<?php

namespace App\Http\Controllers\Dashboard\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class MarketControllerApi extends Controller
{
	// Description
	// Pengambilan data dari bitcoid.co.id sperti (data order buy and sell, data price, volume, dll)
    public static function BitcoinData($cointype)
    {
    	$client = new Client();
    	$res = $client->request('POST', 'https://api2.bitcoin.co.id/api/webdata/'.$cointype, [
		]);
		return json_decode($res->getBody(), true);
    }
}
