<?php

include 'connection.php';


if (empty($_POST["good"])){
	$good = false;
} else {
$good = true;
}


if (empty($_POST["bad"])){
	$bad = false;
} else{
$bad = true;
}

if($bad == true){
	$post = 2;
}else{
	$post = 1;
}

$date = date("m.d.y"); 

var_dump($date);

/*
$sex = $_POST["sex"];
$vehicle = $_POST["vehicle"];
*/




$Connect = new DBConnector();
$Connect->addRate($post, $date);


	

/* var_dump(); */

	
?>