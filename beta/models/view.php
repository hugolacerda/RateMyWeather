<?php

class View {
	function printHeader(){
		header('Content-type: text/html');
	}

	function getView($file='', $data=''){

		$username = 'BlacktipH';
		$filePath = 'Sites/SSL_Part2';

		$fullPath = "/Users/".$username."/".$filePath."/project.com/views/" .$file. ".php";

		if(preg_match("/\w/", $file) && file_exists($fullPath)){
			include($fullPath);
		}
	}
}

?>