<?php

class View {
	function printHeader(){
		header('Content-type: text/html');
	}

	function getView($file='', $data=''){

		

		$fullPath = "/Users/Kalrach/Desktop/RateMyWeather/prototype_site/views/" .$file.".php";

		if(preg_match("/\w/", $file) && file_exists($fullPath)){
			include($fullPath);
		}
	}
}

?>