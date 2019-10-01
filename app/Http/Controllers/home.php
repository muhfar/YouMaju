<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class home extends Controller
{
    public function index(){
    	
		// if(session(status) == ''){
		// 	redirect('/');
		// }
		
    	$data = Arr::add(['title' => 'Home | YouMaju', 
    						'keywords' => ''],
    						'description', 'Desc Home'
    					);
    	return view('home', $data);
    }
}
