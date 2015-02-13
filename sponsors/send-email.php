<?php
	// AUTHENTICATE
	if(isset($_POST['sponsor_name']) && isset($_POST['sponsor_email']) && isset($_POST['message'])) {
		$sponsor_name 			= $_POST['sponsor_name'];
		$sponsor_email	 		= $_POST['sponsor_email'];
		$message 				= $_POST['message'];
	} else {
		header("Location: ./?fail");
		die();
	}

	// SEND EMAIL AND REDIRECT
	require_once '../tools/emailer.php';

	sendAdminSponsorEmail($sponsor_name, $sponsor_email, $message);
?>