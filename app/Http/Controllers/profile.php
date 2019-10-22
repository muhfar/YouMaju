<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\curl;


class profile extends Controller
{
    public function index()
    {	
    	if(session()->has('idUser')){
    		$data['user'] = session()->all();

    		$url = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$data['user']['token'].'&part=snippet,statistics&mine=true';

        	$ch = new curl;
		    $result = $ch->connect($url);

		    // var_dump($result);
            $data['user'] =  array(
                'nama' => $result['items'][0]['snippet']['title'],
                'profilePic' => $result['items'][0]['snippet']['thumbnails']['medium']['url'],
                'subsCount' => $result['items'][0]['statistics']['subscriberCount']
                 );
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
