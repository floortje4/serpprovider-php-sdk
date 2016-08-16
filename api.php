<?php

define("SERPPROVIDER_FETCHMETHOD", "fopen"); //curl or fopen
define("SERPPROVIDER_KEY", "your-api-key"); //get your api key at serpprovider.com
define("SERPPROVIDER_ENDPOINT", "http://api.serpprovider.com/"); 
define("SERPPROVIDER_OUTPUT", "json"); // json or array 

class SerpProvider{
	public static function query($provider,$language,$country,$device,$keyword){
		//build url
		$sUrl = SERPPROVIDER_ENDPOINT.SERPPROVIDER_KEY.'/'.$provider.'/'.$language.'-'.$country.'/'.$device.'/'.urlencode(strtolower($keyword));
		
		// fetch json results
		$json = call_user_func_array('self::'.SERPPROVIDER_FETCHMETHOD,array($sUrl));
		
		// return output as json or array
		return (SERPPROVIDER_OUTPUT == 'json')? $json : json_decode($json,true);
	}

	private static function curl($sUrl){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $sUrl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		$data = curl_exec($curl);
		curl_close($curl);
		return $data;
	}

	private static function fopen($sUrl){
		return file_get_contents($sUrl);

	}
}
