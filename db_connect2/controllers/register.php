<?php

require_once 'models/view.php';
 /* include "views/register.php"; */

 class Register {
 	 	function get($pairs, $data = '') {
 		$view_model = new View();
		$view_model->getView("header");
		echo("Register Class is running");
		if(empty($pairs['action'])){
			$action = 'home';
		}else{
			$action = $pairs['action'];
		}
		
		$data = array(
    		'username' => "Hugo",
    		'controller' => "register");
    		
    	$view_model->getView("header", $data);
	    $view_model->getView('sidebar', $data);
	    if ($action == 'register'){						
	    $view_model->getView("register", $data);
		} else if ($action == 'aboutUs'){
    		$view_model->getView('about', $data);
		} else {
    		$view_model->getView('register', $data);
		}
		$view_model->getView('footer', $data);
		
	}
 }
?>