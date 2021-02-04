<?php

	session_start();
	
	
	include "../classes/user.php";
	/* This is to delete gameId if gameId exists for a user and its opponent */
	$user = new user();
	if ($_SESSION['GameId']!=0){
		$user->DeleteGame($_SESSION['GameId']);
		$_SESSION['GameId']="";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<META HTTP-EQUIV=Refresh; 
	<head>
	<link rel="stylesheet" href="../style/Style.css">
		<title>Chat Application Home</title>
		
	
	</head>
	<body>
	<h1> عزیز خوش آمدید <span style="color:green"><?php
	echo $_SESSION['UserName'];
	?></span></h1>
    <h4>افراد حاضر در اتاق</h4>
	<br>
	
		<div id="AvailablePlayers">
		</div>
		
		<div id="ChatMessages">
		</div>
	<div id="ChatBig"> 
		<span style="color:green">گفت و گو با همه</span><br/>
		<textarea id="ChatText" name="ChatText"></textarea>
	</div>

    <div >
        <input type="button" onclick="parent.location='../../index.php';" value="بازگشت" />
    </div>
	
	<script src="../js/jquery.js"></script>	
	<script src="../js/availablePlayers.js"></script>
	<script src="../js/chatbox.js"></script>		
	</body>
</html>


		
	
	
	

