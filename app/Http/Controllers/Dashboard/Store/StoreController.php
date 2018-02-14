<?php

namespace App\Http\Controllers\Dashboard\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function user()
    {
    	return view('dashboard.store.store');
    }
}
