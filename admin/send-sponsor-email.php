<?php
	// AUTHENTICATE
	session_start();

	if(isset($_SESSION['ADMIN_ID']) && isset($_POST['admin_name']) && isset($_POST['admin_email'])
		&& isset($_POST['sponsor_email']) && isset($_POST['subject']) && isset($_POST['message'])) {
		$admin_name 			= $_POST['admin_name'];
		$admin_email 			= $_POST['admin_email'];
		$sponsor_email	 		= $_POST['sponsor_email'];
		$subject 				= $_POST['subject'];
		$message 				= $_POST['message'];
	} else {
		header("Location: ./?fail");
		die();
	}

	// SEND EMAIL AND REDIRECT
	require_once '../tools/emailer.php';

	sendSponsorEmail($admin_name, $admin_email, $sponsor_email, $subject, $message);
?>