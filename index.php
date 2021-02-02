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
			<input type="submit" id="lMoveSQL_submit" value="Start saved game">	
			<div id="lMoveSQL_data" ></div>
			<br/>
			<input type="submit" id="lSaveSQL_submit" value="Save board">	
			<div id="lSaveSQL_data" ></div>
			<br/>
			<input type="submit" id="multiplayer_submit" 
			onclick="parent.location='chMult/pages/UserLogin.php'" 
			value="Multiplayer game">				
		</div>
		
		<span id="GameStatus"></span>
		<button type="button" id="NewGameButton">شروع مجدد</button><br/>

	
	</body>
</html>

