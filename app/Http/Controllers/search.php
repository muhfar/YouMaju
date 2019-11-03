<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\channel;

class search extends Controller
{
    public function index()
    {

    	$data['channel'] = channel::all();

    	return view('search', $data);
    }

    public function search($Request){
    	
    }
}
