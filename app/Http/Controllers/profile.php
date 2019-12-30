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
    		$session = session()->all();

            // if($idChannel == 'my'){
            
            // }else{
            
            // }
            $url_userData = 'https://www.googleapis.com/youtube/v3/channels?access_token='.$session['token'].'&part=snippet,contentDetails,statistics&id='. $idChannel .'&key='. env('GOOGLE_API_KEY');

            $result = $ch->connect($url_userData);

            // var_dump($result);
            //Check Response API
            if($result['httpResponseCode'] == '200'){
                $data['user'] =  array(
                    'etag' => $result['items'][0]['etag'],
                    'idChannelYoutube' => $result['items'][0]['id'],
                    'nama' => $result['items'][0]['snippet']['title'],
                    'profilePic' => $result['items'][0]['snippet']['thumbnails']['medium']['url'],
                    'playlistVideo' => $result['items'][0]['contentDetails']['relatedPlaylists']['uploads'],
                    'videoCount' => $result['items'][0]['statistics']['videoCount'],
                    'subsCount' => $result['items'][0]['statistics']['subscriberCount']
                );
                // var_dump($result);

                // get id Video from account User
                $url_idVideo = 'https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=10&playlistId='. $data['user']['playlistVideo'] .'&access_token='.$session['token'].'&key='. env('GOOGLE_API_KEY');
                $result_idVideo = $ch->connect($url_idVideo);

                //Cek Jumlah Video User
                $totalVideo = $result_idVideo['pageInfo']['totalResults'];

                //Handle Jumlah Video Null
                if($totalVideo != '0'){
                    foreach ($result_idVideo['items'] as $key) {
                        $idVideo[] = $key['contentDetails']['videoId'];
                    }

                    //get Video from Id video
                    $url_getVideo = 'https://www.googleapis.com/youtube/v3/videos?access_token='.$session['token'].'&key='. env('GOOGLE_API_KEY').'&part=player&id=';

                    foreach ($idVideo as $key) {
                        $url_getVideo .= $key.',';
                    }

                    $result_getVideo = $ch->connect($url_getVideo);

                    foreach ($result_getVideo['items'] as $key) {
                        $data['embedVideo'][] = $key['player']['embedHtml'];
                    }

                }else{
                    $data['embedVideo'][] = '<h4>No Video Uploaded</h4>';
                }
                // var_dump($result_idVideo);
                
                if($idChannel != session('idChannelYoutube')){
                    $data['subscribe'] = $this->cekSubscribe($idChannel);
                }

                // var_dump($result);
                // var_dump($session);
                return view('profile', $data);
                
            }elseif ($result['httpResponseCode'] == '401') {
                //Check if Response Unauthorized
                $error['message'] = $result['error']['message'];
                $this->logout();
                return redirect('/')->with('status-error', 'Please contact us immediately about : Code '. $result['httpResponseCode'].', ' . $error['message']);
            }else{
                //Any other error
                $error['message'] = $result['error']['message'];
                $this->logout();
                return redirect('/')->with('status-error', 'Please contact us immediately about : Code '. $result['httpResponseCode'].', ' . $error['message']);
            }

    	}else{
            //Session Timeout or Not Set
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
            $session = session()->all();

            $ch = curl_init();

            $url = 'https://www.googleapis.com/youtube/v3/subscriptions?'.'part=snippet&key='. env('GOOGLE_API_KEY');

            $dataPost['snippet'] = array(
                'resourceId' => array(
                    'kind' => 'youtube#channel',
                    'channelId' => $idChannel
                )
            );

            // var_dump(json_encode($dataPost));
            $header = array(
                'Content-Type : application/json', 
                'Accept : application/json',
                'Authorization : Bearer ' . $session['token']
            );

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataPost));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

            $result = json_decode(curl_exec($ch), true);
            $result['httpResponseCode'] = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

            // var_dump(curl_error($ch));
            curl_close($ch);

            // var_dump($result);

            $channelId = $result['snippet']['resourceId']['channelId'];
            $kind = $result['kind'];
            // var_dump($channelId);
            if($result['httpResponseCode'] == '200'){
                sleep(2);
                return redirect('/profile/'.$idChannel)->with('status-success', 'Subscribe Berhasil!');
            }else{
                $error['message'] = $result['error']['message'];
                // $error['message'] = 'Subscribe gagal!';
                sleep(2);
                return redirect('/profile/'.$idChannel)->with('status-error', 'Please contact us immediately about : Code '. $result['httpResponseCode'].', ' . $error['message']);
            }
            
        }else{
            return redirect('/redirect');
        }
    }

    public function unsubscribe($idChannel)
    {
        if(session()->has('idUser')){
            $session = session()->all();

            $ch = new curl;

            $urlId = 'https://www.googleapis.com/youtube/v3/subscriptions?part=id&mine=true&forChannelId='. $idChannel .'&access_token='. $session['token'].'&key='. env('GOOGLE_API_KEY');
            $resultId = $ch->connect($urlId);

            // var_dump($resultId);

            $url = 'https://www.googleapis.com/youtube/v3/subscriptions?id='. $resultId['items'][0]['id'] .'&key='. env('GOOGLE_API_KEY') .'&access_token='. $session['token'];

            $ch = curl_init();

            $header = array( 
                'Accept : application/json',
                'Authorization : Bearer ' . $session['token']
            );

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

            $result = json_decode(curl_exec($ch),TRUE);
            $result['httpResponseCode'] = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
            curl_close($ch);

            // var_dump($result);
            
            if($result['httpResponseCode'] == '204'){
                sleep(2);
                return redirect('/profile/'.$idChannel)->with('status-success', 'Anda telah berhenti berlangganan!' );
            }else{
                $error['message'] = $result['error']['message'];
                // $error['message'] = 'Unsubscribe gagal!';
                sleep(2);
                return redirect('/profile/'.$idChannel)->with('status-error', 'Please contact us immediately about : Code '. $result['httpResponseCode'].', ' . $error['message']);
            }
        }else{
            return redirect('/redirect');
        }
    }

    public function cekSubscribe($idChannel)
    {
        if(session()->has('idUser')){
            $session = session()->all();

            $ch = new curl;

            //Cek Subscribe User yang dikunjungi / subscribing
            $url = 'https://www.googleapis.com/youtube/v3/subscriptions?part=id&channelId='. $idChannel .'&forChannelId='. $session['idChannelYoutube'] .'&access_token='. $session['token'].'&key='. env('GOOGLE_API_KEY');
            $result = $ch->connect($url);

            if($result['httpResponseCode'] == '200'){
                $totalResults = $result['pageInfo']['totalResults'];

                if($totalResults == '0'){
                    $data['subscribing'] = '0';
                }else{
                    $data['subscribing'] = '1';
                }

            }else{
                $data['subscribing'] = '403';
            }

            //Cek Subscribe User yang login
                $url = 'https://www.googleapis.com/youtube/v3/subscriptions?part=id&mine=true&forChannelId='. $idChannel .'&access_token='. $session['token'].'&key='. env('GOOGLE_API_KEY');
                $result = $ch->connect($url);

                $totalResults = $result['pageInfo']['totalResults'];

                if($totalResults == '0'){
                    $data['subscribe'] = 0;
                }else{
                    $data['subscribe'] = 1;
                }
            

            return $data;
            // var_dump($result);
            // return $result;
        }
    }

}
