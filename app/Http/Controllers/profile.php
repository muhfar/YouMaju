<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\curl;


class profile extends Controller
{
    private $ch;
    public function index($idChannel)
    {	
        $ch = new curl;

    	if(session()->has('idUser')){
    		$data['session'] = session()->all();

            // if($idChannel == 'my'){
            
            // }else{
            //     $url_userData = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$data['session']['token'].'&part=snippet,contentDetails,statistics&id='. $idChannel;
            // }
            $url_userData = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$data['session']['token'].'&part=snippet,contentDetails,statistics&id='. $idChannel;

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

            // get id Video from account User
            $url_idVideo = 'https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=10&playlistId='. $data['user']['playlistVideo'] .'&access_token='.$data['session']['token'];
            $result_idVideo = $ch->connect($url_idVideo);

            foreach ($result_idVideo['items'] as $key) {
                $idVideo[] = $key['contentDetails']['videoId'];
            }

            //get Video from Id video
            $url_getVideo = 'https://www.googleapis.com/youtube/v3/videos?access_token='.$data['session']['token'].'&part=player&id=';

            foreach ($idVideo as $key) {
                $url_getVideo .= $key.',';
            }

            $result_getVideo = $ch->connect($url_getVideo);

            foreach ($result_getVideo['items'] as $key) {
                $data['embedVideo'][] = $key['player']['embedHtml'];
            }

            // var_dump($result);
            // var_dump($data['session']);
            return view('profile', $data);

    		
    	}else{
    		return redirect('/redirect');
    	}
    	
    }

    public function logout()
    {
        $ch = new curl;
        $url = 'https://accounts.google.com/o/oauth2/revoke?token='. session()->token();
        $ch->connect($url);

        session()->flush();

    	return redirect('/');
    }

    public function subscribe($idChannel)
    {
        if(session()->has('idUser')){
            $data['session'] = session()->all();

            $ch = curl_init();

            $url = 'https://www.googleapis.com/youtube/v3/subscriptions?access_token'. $data['session']['token'].'&part=snippet';

            $dataPost['snippet'] = array(
                'resourceId' => array(
                    'kind' => 'youtube#channel',
                    'channelId' => $idChannel
                )
            );

            // var_dump(json_encode($data['snippet']));
            $header = array(
                'Content-type : application/json', 
                'Accept : application/json',
                'Authorization : Bearer ' . $data['session']['token']
            );

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataPost));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

            $result = json_decode(curl_exec($ch), true);
            curl_close($ch);

            // var_dump($result);

            $channelId = $result['snippet']['resourceId']['channelId'];
            $kind = $result['kind'];
            // var_dump($channelId);
            if(!empty($channelId)){
                return back()->with('status-success', 'Subcribe Berhasil!');
            }else{
                return back()->with('status-failed', 'Subscribe Gagal!');
            }
            
        }else{
            return redirect('/redirect');
        }
    }

    public function unsubscribe($idChannel)
    {
        if(session()->has('idUser')){
            $data['session'] = session()->all();

            $ch = new curl;

            $urlId = 'https://www.googleapis.com/youtube/v3/subscriptions?part=id&forChannelId='.$idChannel.'&mine=true&access_token'. $data['session']['token'];
            $resultId = $ch->connect($urlId);

            var_dump(json_decode($resultId, true));
            $url = 'https://www.googleapis.com/youtube/v3/subscriptions?id='.$resultId['items'][0]['id'].'&access_token='. $data['session']['token'];


            $data['resourceId'] = array(
                'kind' => 'youtube#channel',
                'channelId' => $idChannel
            );

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, DELETE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
                'Accept : application/json'
            ));

            $result = curl_exec($ch);
            curl_close($ch);

            var_dump($result);
        }else{
            return redirect('/redirect');
        }
    }

}
