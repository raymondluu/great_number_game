<?php 
	session_start(); 

	if(!isset($_SESSION["random_number"]))
	{
		$_SESSION["random_number"] = rand(1, 100);
	}
	// var_dump($_SESSION);
?>
<html>
	<head>
		<title>Great Number Game</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="main.js.php"></script>
	</head>
	<body>
		<div class="container">
			<h1>Welcome to the Great Number Game!</h1>
			<p>I am thinking of a number between 1 and 100</p>
			<p>Take a guess!</p>
			<div class='bad_result1'><p>Too Low!</p></div>
			<div class='bad_result2'><p>Too High!</p></div>
			<div class='good_result'>
				<p class="game_win"><?= $_SESSION["random_number"] ?> Was the number!</p>
				<form action="process.php" method="post"><input type="submit" value="Play Again!"></form>
			</div>
			<form action="process.php" method="post">
				<input class="user_input" type="text" name="input">
				<input class="user_input" type="submit" value="submit">
			</form>
		</div>
	</body>
</html>