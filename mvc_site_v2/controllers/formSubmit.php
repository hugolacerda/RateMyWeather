<?php

// echo 'hello';

include '../models/DBConnector.php';

var_dump($_POST);

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

//== Connect to database
$db = new DBConnector();
$db->addRate($post, $date);

?>