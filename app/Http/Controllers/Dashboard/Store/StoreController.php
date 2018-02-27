<?php

namespace App\Http\Controllers\Dashboard\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
	public function index()
	{
		return view('dashboard.store.store');
	}
    public function user()
    {
    	return view('dashboard.store.store_profil');
    }
}
