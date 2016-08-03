<?php 
	function post($curlPost, $url) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_NOBODY, true); 
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
		$return_str = curl_exec($curl);
		curl_close($curl);
		return $return_str;
	}

	function get_code($length, $t=0) {
		$string='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$content='';
		$type=array(9,35,61);
		for($i=0; $i<$length; $i++) { 
			$n=mt_rand(0, $type[$t]);
			$content.=$string[$n];
		}
		return $content;
	}

	function xml_to_array($xml) {
		$object=simplexml_load_string($xml);
		return json_decode(json_encode($object), true);
	}
?>