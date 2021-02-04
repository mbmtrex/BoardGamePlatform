<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="Chess, Engine, Javascript, Play Chess, Chess Program, Javascript Chess, Game">
		<title>JSChess</title>		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/sliderStyle.css">
		<link href="stylesChess.css" rel="stylesheet" type="text/css">
		<script type="text/javascript"> if (!window.console) console = {log: function() {}}; </script>
	</head>
	<body>

		<header>
			<h1 style="text-align: center;">شطرنج</h1>
		</header>

		<?php include 'php_pages/loginForm.php'; ?>	


		<div id="Board">
		</div>
		<div id="CurrentFenDiv">
			<span id="currentFenSpan"></span>		
		</div>	
		<div id="SaveLoadOutput" style="display:none">		
			<div id="lMove"></div>
			<input type="submit" id="lMoveSQL_submit" value="بارگذاری بازی ذخیره شده">
			<div id="lMoveSQL_data" ></div>
			<br/>
			<input type="submit" id="lSaveSQL_submit" value="ذخیره بازی">
			<div id="lSaveSQL_data" ></div>
			<br/>
			<input type="submit" id="multiplayer_submit" 
			onclick="parent.location='chMult/pages/UserLogin.php'" 
			value="بازی چند نفره">
		</div>
		
		<span id="GameStatus"></span>
		<button type="button" id="NewGameButton">شروع مجدد</button><br/>

		<!--This div not outputted but needed to work  -->	
		<?php include 'php_pages/notOutputted.php'; ?>	
		<!--   -->
		


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/loginlogout.js"></script>
		<script src="js/buttons/register.js"></script>
		<script src="js/defs.js"></script>
		<script src="js/io.js"></script>
		<script src="js/board.js"></script>
		<script src="js/movegen.js"></script>
		<script src="js/makemove.js"></script>
		<script src="js/perft.js"></script>
		<script src="js/evaluate.js"></script>
		<script src="js/pvtable.js"></script>
		<script src="js/search.js"></script>
		<script src="js/protocol.js"></script>
		<script src="js/gui.js"></script>
		<script src="js/main.js"></script>
		<script src="js/buttons/loadSaveGame.js"></script>
	</body>
</html>

