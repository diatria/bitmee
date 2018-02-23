<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Homepage\HomepageController@homepage');
Route::get('login', 'Homepage\HomepageController@login');
Route::get('register', 'Homepage\HomepageController@register');


// Dashborad
Route::get('dashboard', 'Dashboard\DashboardController@index');

// STORE
Route::get('store', 'Dashboard\Store\StoreController@index');
Route::get('store/user', 'Dashboard\Store\StoreController@user');

// MARKET
Route::get('market/{cointype}', 'Dashboard\Market\MarketController@index');

// Testing
Route::get('test', 'Homepage\HomepageController@autoBuy');

// Socket
Route::get('push_bitcoin_data', 'Socket\PushBitcoinData@pushData');

Route::get('/a', function() {
    function btcid_query($method, array $req = array()) {
 // API settings
 $key = 'OJZHTGIF-6TWDFORA-VUH6WYDS-HB1EBAC5-8NFFK7UH'; // your API-key
 $secret = 'ef2a4fe5ec4105ee726eb21523558a5ec20741ae2a8fa15428f955009015c2574ce79b6082cb50c6'; // your Secret-key
 $req['method'] = $method;
 $req['nonce'] = time();

 // generate the POST data string
 $post_data = http_build_query($req, '', '&');
 $post_data;
 $sign = hash_hmac('sha512', $post_data, $secret);
 // generate the extra headers
 $headers = array(
'Sign: '.$sign,
'Key: '.$key,
 );
 // our curl handle (initialize if required)
 static $ch = null;
 if (is_null($ch)) {
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible;
BITCOINCOID PHP client; '.php_uname('s').'; PHP/'.phpversion().')');
 }
 curl_setopt($ch, CURLOPT_URL, 'https://vip.bitcoin.co.id/tapi/');
 curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

 // run the query
 $res = curl_exec($ch);
 if ($res === false) throw new Exception('Could not get reply:
'.curl_error($ch));
 $dec = json_decode($res, true);
 if (!$dec) throw new Exception('Invalid data received, please make sure
connection is working and requested API exists: '.$res);

 curl_close($ch);
 $ch = null;
 return $dec;
}
$result = btcid_query('transHistory');
return $result;
});