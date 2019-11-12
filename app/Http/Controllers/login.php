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
    	$data['user'] = session()->all();

        
        if(session()->has('idUser')){
        	// var_dump($data['user']);
    		return redirect('/search');	
    	}else{

    		$scopes = array(
    			'https://www.googleapis.com/auth/youtube.readonly',
    			'https://www.googleapis.com/auth/youtube',
    			'https://www.googleapis.com/auth/youtube.force-ssl'
    		);
    		$parameter = array(
    			'prompt' => 'consent select_account' ,
    			'access_type' => 'offline'
    		);
    		return Socialite::driver('google')
	    	->scopes($scopes)
	    	->with($parameter)
	    	->redirect();	
    	}
    	
    }

	public function callback()
    {
    	$ch = new curl;

    	//data login from google
        $user = Socialite::driver('google')->user();

        //transfrom data to array
        $user = json_decode(json_encode($user), true);

        if(!isset($user)){
        	return redirect('/redirect');
        }else{
        	//Check DB if the user already exits
	        $user_db = DB::table('user_account')->where('idGoogle', $user['id'])->exists();

	        if($user_db){
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
	        	DB::table('user_account')->insert($data['user']);
	        }

	        // data login from google
	        $data['session'] = DB::table('user_account')->where('idGoogle', $user['id'])->first(['idUser', 'idGoogle', 'token']);

	        $data['session'] = json_decode(json_encode($data['session']), true);

	        //Get Data Channel Youtube User
		        $url_userData = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$data['session']['token'].'&part=snippet,contentDetails,statistics&mine=true&key='. env('GOOGLE_API_KEY');

		    	$result = $ch->connect($url_userData);

		    	// var_dump($result);
	            $data['user'] =  array(
	                'etag' => $result['items'][0]['etag'],
	                'idChannelYoutube' => $result['items'][0]['id'],
	                'nama' => $result['items'][0]['snippet']['title'],
	                'profilePic' => $result['items'][0]['snippet']['thumbnails']['medium']['url'],
	                'playlistVideo' => $result['items'][0]['contentDetails']['relatedPlaylists']['uploads'],
	                'videoCount' => $result['items'][0]['statistics']['videoCount'],
	                'subsCount' => $result['items'][0]['statistics']['subscriberCount']
	            );

	            // Update or insert data channel from user
	            DB::table('channel')->updateOrInsert(['idChannelYoutube' => $result['items'][0]['id']] , $data['user']);

	            //get idChannel to save idChannel to table Data User
	            $idChannel = DB::table('channel')->where('idChannelYoutube', $result['items'][0]['id'])->value('idChannel');

	            //Insert idChannel to table Data User
	            DB::table('user_account')->where('idUser', $data['session']['idUser'])->update(['idChannel' => $idChannel]);

	            //Put idChannelYoutube User to Session
	            $data['session']['idChannelYoutube'] = $result['items'][0]['id'];
	            session($data['session']);

		    // var_dump($data['session']);
	        return redirect('/search');
        }
    }

}
