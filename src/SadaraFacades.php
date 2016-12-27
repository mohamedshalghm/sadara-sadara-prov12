<?php

namespace Sadara\SadaraProv;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SadaraFacades extends Controller
{
    public static function getFacebookLike($source_url)
    {
		$url = "http://api.facebook.com/restserver.php?method=links.getStats&urls=".urlencode($source_url); 
		$xml = file_get_contents($url); 
		$xml = simplexml_load_string($xml); 
		echo "Like --- ".$likes = $xml->link_stat->like_count; 
    }

public static function getFile()
{
	 $arr=include(base_path('config/initalize.php'));
	 return $arr;
}

}
