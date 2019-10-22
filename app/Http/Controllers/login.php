<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use Socialite;
use Google_Client;
use Google_Service_YouTube;


class login extends Controller
{	

	public function redirect()
    {
        // $client = new Google_Client();
        // $client->setAuthConfig('client_secret.json');
        // $client->addScope(GOOGLE_SERVICE_YOUTUBE::YOUTUBE_READONLY);
        // $client->setRedirectUri('http://'. $_SERVER['HTTP_HOST'] . ('/callback'));

        // $client->setAccessType('offline');
        // $client->setApprovalPrompt('consent');
        // $client->setIncludeGrantedScopes(true);   // incremental auth
        // $client->setState($sample_passthrough_value);


        // $auth_url = $client->createAuthUrl();
        // header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
    	// $data['user'] = session()->all();

        
     //    if(session()->has('idUser')){
     //    	// var_dump($data['user']);
    	// 	return redirect('/profile');	
    	// }else{
    		
    	// }
    	return Socialite::driver('google')
    	->scopes(['openid','email', 'profile', 'https://www.googleapis.com/auth/youtube.readonly'])
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
	        	DB::table('user_account')->where('idGoogle', $user['id'])->update(['token' => $user['token'] ]);

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

	        $google_client_token = [
		        'access_token' => $user['token'],
		        'refresh_token' => $user['refreshToken'],
		        'expires_in' => $user['expiresIn']
		    ];

		    $client = new Google_Client();
		    $client->setDeveloperKey(env('GOOGLE_API_KEY'));
		    $client->setAccessToken(json_encode($google_client_token));

		    $youtube = new Google_Service_YouTube($client);
		    $channel = $youtube->channels->listChannels(array('snippet','statistics'), array('mine' => true));

		    var_dump($channel);
	        
	        //data login from google
	        // $data['session'] = DB::table('user_account')->where('idGoogle', $user['id'])->first(['idUser', 'idGoogle', 'token']);

	        // session(json_decode(json_encode($data['session']), true));

	        // var_dump($user);
	        // var_dump($data['session']);
	        // return redirect('/profile');
        }
    }

}
