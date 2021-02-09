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
<html lang="fa" dir="rtl">
	<META HTTP-EQUIV=Refresh; 
	<head style="direction: rtl">
	<link rel="stylesheet" href="../../css/Style.css">

		
	
	</head>
	<body style="border-style: double">
	<h1 id="MyHeader1"><span style="color:green"><?php
	echo $_SESSION['UserName'];
	?></span> عزیز خوش آمدید   </h1>
    <div id="ChatBox">
    <h4 id="MyHeader2">افراد حاضر در اتاق</h4>

		<div id="AvailablePlayers">
		</div>
		
		<div id="ChatMessages">
		</div>
    </div>
	<div id="ChatBig">
		<span style="direction: ltr;color: green" >گفت و گو با همه</span><br/>
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


		
	
	
	

