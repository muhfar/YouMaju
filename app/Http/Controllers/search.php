<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\channel;

class search extends Controller
{
    public function index()
    {
    	if(session()->has('idUser')){
			$data['channel'] = channel::where('idChannelYoutube','!=', session('idChannelYoutube'))->orderBy('nama', 'ASC')->get();
    		// var_dump($data);
			return view('search', $data);
		}else{
			return redirect('/redirect');
		}
    }

    public function cariUser(Request $request){
    	$username = $request->validate([
    		'username' => 'required'
    	]);

    	$username = $request->input('username');

    	if(session()->has('idUser')){
    		$data['channel'] = channel::where('nama','like', '%'.$username.'%')
    							->where('idChannelYoutube','!=', session('idChannelYoutube'))
    							->orWhere('idChannelYoutub', 'like', '%'.$username.'%')
    							->orderBy('nama', 'ASC')
    							->get();
    		// var_dump($data);
    		
    		return view('search', $data);
		}else{
			return redirect('/redirect');
		}
    }
}
