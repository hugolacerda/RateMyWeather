<?php

include("models/view.php");

$view = new View();
$view->printHeader();

//===== Check to see if a controller is typed in
if(empty($_GET["controller"])) {
    $con = 'home';
}
else {
    $con = $_GET["controller"];
}

//===== Decide which CONTROLLER to use
if($con == 'home') {
    include ("controllers/home.php");

    $controller = new Home();
    $controller->get($_GET);
}

?>