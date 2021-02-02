<?php
	include_once("../connectToDB.php");	
	$_db=null;
	session_destroy();
	$output = array("msg"=>"شما از سیستم خارج شدید", "loggedin"=>"false");
	echo json_encode($output);
?>