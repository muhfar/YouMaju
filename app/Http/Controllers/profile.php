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
    		$data['session'] = session()->all();

    		$url_userData = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$data['session']['token'].'&part=snippet,contentDetails,statistics&mine=true';

        	$result = $this->exec_curl($url_userData);

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

            //Update or insert data channel from user
            DB::table('channel')->updateOrInsert(['idChannelYoutube' => $result['items'][0]['id']] , $data['user']);

            //get idChannel to save idChannel to table Data User
            $idChannel = DB::table('channel')->where('idChannelYoutube', $result['items'][0]['id'])->value('idChannel');

            //Insert idChannel to table Data User
            DB::table('user_account')->where('idUser', $data['session']['idUser'])->update(['idChannel' => $idChannel]);

            // get id Video from account User
            $url_idVideo = 'https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=50&playlistId='. $data['user']['playlistVideo'] .'&access_token='.$data['session']['token'];
            $result_idVideo = $this->exec_curl($url_idVideo);

            foreach ($result_idVideo['items'] as $key) {
                $idVideo[] = $key['contentDetails']['videoId'];
            }

            //get Video from Id video
            $url_getVideo = 'https://www.googleapis.com/youtube/v3/videos?access_token='.$data['session']['token'].'&part=player&id=';

            foreach ($idVideo as $key) {
                $url_getVideo .= $key.',';
            }

            $result_getVideo = $this->exec_curl($url_getVideo);

            foreach ($result_getVideo['items'] as $key) {
                $data['embedVideo'][] = $key['player']['embedHtml'];
            }

            // var_dump($result_idVideo);
            // var_dump($data['session']);
    		return view('profile', $data);
    	}else{
    		return redirect('/');
    	}
    	
    }

    public function logout()
    {
        $url = 'https://accounts.google.com/o/oauth2/revoke?token='. session()->token();
        $this->exec_curl($url);

        session()->flush();

    	return redirect('/');
    }

    public function exec_Curl($url)
    {
        $ch = new curl;
        $result = $ch->connect($url);

        return $result;
    }
}
