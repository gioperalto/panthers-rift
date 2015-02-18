<?php
	// AUTHENTICATION
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['summoner_name']) && isset($_POST['summoner_rank'])) {
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$summoner_name 	= $_POST['summoner_name'];
		$summoner_rank 	= $_POST['summoner_rank'];
	} else {
		// IF AUTHENTICATION FAILED
		header("Location: ../?invalid");
		die();
	}

	if(trim($summoner_rank," ") == "") {
		// IF AUTHENTICATION FAILED
		header("Location: ../?nodata");
		die();
	}

	// CONNECT TO DB
	include '../config/db-con.php';

	$checkAll = "SELECT * FROM user WHERE user_name='" . $name . "' OR user_email='" . $email . "' OR user_summoner_name='" 
	. $summoner_name . "';";
	if($result = mysqli_query($conn,$checkAll)) {
		if(mysqli_num_rows($result) > 0) {
			// REDIRECT TO FAIL
			header("Location: ../?fail");
			die();
		}
	}

	$insert = "INSERT INTO user (user_name,user_email,user_summoner_name,user_summoner_rank,created_at) VALUES ('" . $name . "','"
	. $email . "','" . $summoner_name . "','" . $summoner_rank . "',CURRENT_TIMESTAMP());";
	mysqli_query($conn,$insert);

	require_once '../tools/emailer.php';

	$selectLast = "SELECT user_id,user_name,user_email FROM user ORDER BY user_id DESC LIMIT 1;";
	if($result = mysqli_query($conn,$selectLast)) {
		while($row = mysqli_fetch_assoc($result)) {
			sendRegistrationEmail($row['user_name'],$row['user_email'],$row['user_id']);
		}
	}	

	// CLOSE CONNECTION
	mysqli_close($conn);
?>