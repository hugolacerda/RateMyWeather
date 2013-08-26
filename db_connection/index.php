<?php
 	include "controllers/home.php";
	
	/* include("settings/db.php"); */


	/*
if (empty ($_GET["controllers"])) {
	$con = 'home';
	}else{
		$con = $_GET["controllers"];
	}
	
	if ($con == "home") {
	$homeInstance = new Home();
	$homeInstance->get($_GET);
	}else{
		echo "the controller was not 'home'";
	}
	
	if (empty($_GET["controller"])){
		$con = "home";
	} else {
		$con = $_GET["controller"];	
	}
	
	if ($con == 'home') {
		$controller = new Home();
		$controller->get($_GET);
	} else if ($con == 'register'){
*/
		include "controllers/register.php";
		$controller = new Register();
		$controller->get($_GET);
		
	/*
}else if($con == 'user') {
		include "controllers/user.php";
		$controller = new User();
		$controller->get($_GET);
	}
*/

	
	/*
$user = new User();
		$user->dispatch($_GET);
*/ 

	
	
?>