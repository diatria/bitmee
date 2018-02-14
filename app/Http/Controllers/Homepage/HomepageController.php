<?php

namespace App\Http\Controllers\Homepage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Model\Testing\BitnesiaTrade;

class homepageController extends Controller
{
    public function homepage()
    {
    	return view('homepage');
    }

    public function login()
    {
    	return view('login');
    }

    public function register()
    {
    	return view('register');
    }

    public function autoBuy()
    {
        
        // for($i = 0; $i < 100000; $i++){
        //     $data = new BitnesiaTrade;
        //     $data->stop_los = rand(5, 10000);
        //     $data->user = 'ABC';
        //     $data->status = "N";
        //     $data->save();        
        // }

        echo BitnesiaTrade::where('stop_los', 'like', '%100%' )->get();
        
    }
}
