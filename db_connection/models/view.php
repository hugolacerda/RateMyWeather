<?php

class View{
	
	function printHeader(){
		header('content-type: text/html');
	}

	function getView($file = '', $data = '') {
		
		$fullPath = "/Applications/MAMP/htdocs/SSL/day1.php.com/views/$file.php";
		
		if (preg_match("/\w/", $file) && file_exists($fullPath)){
			include($fullPath);
		}
	}
}

?>