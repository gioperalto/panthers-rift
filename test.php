<?php

	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->Port = 587;                                    // TCP port to connect to

	$mail->From = 'admin@panthersrift.com';
	$mail->FromName = 'Panther\'s Rift';
	$mail->addAddress('gyoperalto@gmail.com');     // Add a recipient
	$mail->addReplyTo('gpera008@fiu.edu');
	// $mail->addCC('cc@example.com');

	$mail->addAttachment('assets/img/amumu-img.png');         // Add attachments
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Panther\'s Rift - Subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}

?>