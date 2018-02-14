<?php

namespace App\Http\Controllers\Dashboard\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Controller
use App\Http\Controllers\Dashboard\Market\MarketControllerApi;

// Helper
use App\Helper\CoinHelper;
class MarketController extends Controller
{
    public function index($cointype)
    {
    	// try {
    		$market_prices = MarketControllerApi::BitcoinData($cointype)['prices'];
	    	$coin_price = MarketControllerApi::BitcoinData($cointype)['_24h'];
	    	$coin_price_24h = MarketControllerApi::BitcoinData($cointype)['prices_24h'];
	    	$coin_volume = MarketControllerApi::BitcoinData($cointype)['volumes'];
	    	$coin_info = CoinHelper::Info($cointype);
	    	return view('dashboard.market.market')
	    		->with('market_prices', $market_prices)
	    		->with('coin_price', $coin_price)
	    		->with('coin_price_24h', $coin_price_24h)
	    		->with('coin_info', $coin_info)
	    		->with('auth', false);	
   //  	} catch (\Exception $e) {
   //  		$curl = curl_init();

			// curl_setopt_array($curl, array(
			//   CURLOPT_URL => "https://api2.bitcoin.co.id/api/webdata/".$cointype,
			//   CURLOPT_RETURNTRANSFER => true,
			//   CURLOPT_ENCODING => "",
			//   CURLOPT_MAXREDIRS => 10,
			//   CURLOPT_TIMEOUT => 30,
			//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			//   CURLOPT_CUSTOMREQUEST => "POST",
			// ));

			// $response = curl_exec($curl);
			// $err = curl_error($curl);
			// curl_close($curl);
   //  		return view('dashboard.market.market')
   //  			->with('response', $response)
   //  			->with('auth', true);
   //  		// dd($response);
   //  	}

    }
}
