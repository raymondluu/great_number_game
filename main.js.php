<?php
	session_start(); 
?>
$(document).ready(function(){
	$(".bad_result1").hide();
	$(".bad_result2").hide();
	$(".good_result").hide();

	<?php
		if(isset($_SESSION["result"]) && $_SESSION["result"] == "low")
		{ ?>
			$(".bad_result1").show();
	<?php }
		if(isset($_SESSION["result"]) && $_SESSION["result"] == "high")
		{ ?>
			$(".bad_result2").show();
	<?php }
		if(isset($_SESSION["result"]) && $_SESSION["result"] == "exact")
		{ ?>
			$(".good_result").show();
			$(".user_input").hide();
	<?php }
	?>
});