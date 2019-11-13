<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class curl extends Controller
{
    public function connect($url){
		$curl = curl_init();

    	curl_setopt($curl, CURLOPT_URL, $url);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($curl, CURLOPT_AUTOREFERER, true); 

    	$result = curl_exec($curl);
        $result = json_decode($result, true);
        $result['httpResponseCode'] = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

    	curl_close($curl);

    	

    	return $result;
    }
}
