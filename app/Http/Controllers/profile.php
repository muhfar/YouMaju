<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profile extends Controller
{
    public function index()
    {	
    	if(session()->has('idUser')){
    		$data['user'] = session()->all();

    		$access_token = $data['user']['token'];
    		$curl = curl_init();

        	curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?access_token='.$access_token.'&part=snippet%2Cstatistics&key=AIzaSyDTSi3xV13PtHvv5H8PcrP0Qq-QVg01TEI&mine=true');
        	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        	curl_setopt($curl, CURLOPT_AUTOREFERER, true); 

        	$result = curl_exec($curl);

        	curl_close($curl);

        	$result = json_decode($result, true);
        	var_dump($result);
    		return view('profile', $data);	
    	}else{
    		return redirect('/');
    	}
    	
    }

    public function logout()
    {
		session()->flush();

    	return redirect('/');
    }
}
