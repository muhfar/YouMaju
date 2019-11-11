<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\channel;

class search extends Controller
{
    public function index()
    {
    	if(session()->has('idUser')){
			$data['channel'] = channel::all();

			return view('search', $data);
		}else{
			return redirect('/redirect');
		}
    }

    public function search($Request){
    	
    }
}
