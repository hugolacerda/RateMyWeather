<?php

echo 'hello';

include '../models/connection.php';

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

//Need to set default time zone
date_default_timezone_set('America/New_York');
$date = date("m.d.y"); 

var_dump($date);

$Connect = new DBConnector();
$Connect->addRate($post, $date);

?>