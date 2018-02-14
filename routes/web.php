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