<?php
	session_start(); 	

	if(isset($_SESSION["game_win"]) && $_SESSION["game_win"] == "win")
	{
		$_SESSION = array();
		// session_destroy();
	}

	if(isset($_POST["input"]) && isset($_SESSION["random_number"]))
		{

		if($_POST["input"] < $_SESSION["random_number"])
		{
			$_SESSION["result"] = "low";
		}
		else if($_POST["input"] > $_SESSION["random_number"])
		{
			$_SESSION["result"] = "high";
		}
		else if($_POST["input"] == $_SESSION["random_number"])
		{
			$_SESSION["result"] = "exact";
			$_SESSION["game_win"] = "win";
		}
	}

	header("Location: index.php");
?>