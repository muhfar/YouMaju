<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Http\Controllers\curl;

use Socialite;

class login extends Controller
{	

	public function redirect()
    {
    	// $data['user'] = session()->all();

        
     //    if(session()->has('idUser')){
     //    	// var_dump($data['user']);
    	// 	return redirect('/profile');	
    	// }else{
    		
    	// }
    	return Socialite::driver('google')
    	->scopes(['openid','email', 'profile', 'https://www.googleapis.com/auth/youtube.readonly', 'https://www.googleapis.com/auth/youtube', 'https://www.googleapis.com/auth/youtubepartner'])
    	->redirect();
    }

	public function callback()
    {
    	//data login from google
        $user = Socialite::driver('google')->user();

        //transfrom data to array
        $user = json_decode(json_encode($user), true);

        if(empty($user)){
        	return redirect('/');
        }else{
        	//Check DB if the user already exits
	        $user_db = DB::table('user_account')->where('idGoogle', $user['id'])->exists();

	        if($user_db){
	        	//save data user from DB to session
	        	$data['user'] = DB::table('user_account')->where('idGoogle', $user['id'])->first();

	        	//DB update token
	        	DB::table('user_account')->where('idGoogle', $user['id'])->update(['token' => $user['token'], 'refreshToken' =>$user['refreshToken'] ]);

	        }else{
	        	$data['user'] = array(
		        	'idGoogle' => $user['id'] ,
					'name' => $user['name'] ,
					'email'	 => $user['email'] ,
					'token'	 => $user['token'] ,
					'refreshToken'	 => $user['refreshToken'] ,
					'photo' => $user['avatar'] 
				);

	        	//insert data to DB if not exist
	        	$data['user']['idUser'] = DB::table('user_account')->insertGetId($data['user']);

	        }

		    // $url = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$user['token'].'&part=id&mine=true';
		    // $url = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$user['token'].'&part=snippet,statistics&mine=true';

		    // $ch = new curl;
		    // $result = $ch->connect($url);

		    // var_dump($result);
	        
	        // //data login from google
	        $data['session'] = DB::table('user_account')->where('idGoogle', $user['id'])->first(['idUser', 'idGoogle', 'token']);

	        session(json_decode(json_encode($data['session']), true));

	        return redirect('/profile');
        }
    }

}
