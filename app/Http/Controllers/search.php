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
    		// var_dump($data);
			return view('search', $data);
		}else{
			return redirect('/redirect');
		}
    }

    public function cariUser(Request $request){
    	$username = $request->input('username');

    	if(session()->has('idUser')){
    		$data['channel'] = channel::where('nama','like', '%'.$username.'%')
    							->orWhere('idChannelYoutube', 'like', '%'.$username.'%')
    							->orderBy('nama', 'ASC')
    							->take(9)
    							->get();
    		// var_dump($data);
    		
    		return view('search', $data);
		}else{
			return redirect('/redirect');
		}
    }
}
