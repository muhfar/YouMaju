<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Arr;


class login extends Controller
{	

	public function redirect()
    {
        // $client = new Google_Client();
        // $client->setAuthConfig('.env');
        // $client->addScope(GOOGLE_SERVICE_YOUTUBE::YOUTUBE_FORCE_SSL);
        // $client->setRedirectUri('http://'. $_SERVER['HTTP_HOST'] . ('/callback'));

        // $client->setAccessType('offline');
        // $client->setApprovalPrompt('consent');

        // $auth_url = $client->createAuthUrl();

        return Socialite::driver('google')->redirect();
    }

	public function callback()
    {
        $user = Socialite::driver('google')->user();

        $user = json_decode(json_encode($user), true);

        //data login from google
        // if email not found in db save it
        // else set session
        $data = array(
        	'google_id' => $user['id'],
			'nama' => $user['name'] ,
			'email'	 => $user['email'] ,
			'token'	 => $user['token'] ,
			'refresh_token'	 => $user['refreshToken'] ,
			'photo' => $user['avatar']
		);

        // print_r($data);
        return redirect('/profile');
    }

}
