<?php

	function sendRegistrationEmail($name, $email, $id) {

		$subject = 'Panther\'s Rift - Qualifier Confirmation';

		$message = 
		'<p>
		If you are receiving this email, congratulations! This means you have successfully registered for the tournament.
		</p><p>
		All that is left is to confirm your attendance by clicking the big button below, but please <strong>HURRY</strong> because
		there are only 80 guarenteed spots for those who plan to compete in the qualifiers.
		</p><p>
		If you happen to be one of the last 20 people to register, there will still be hope! You will still be added to our sub
		queue, which means you are next in line if someone drops out of the tournament due to an accident, personal matter, etc.
		</p><p>
		Nevertheless, good luck! We hope to see you at the big event!
		</p>';

		require 'PHPMailerAutoload.php';
		//INITIALIZE MAILER
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		// INCLUDE CONFIG SETTINGS FOR EMAIL
		require 'config/mail-config.php';
		$mail->Username = getEmail();
		$mail->Password = getPassword();

		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->From = 'admin@panthersrift.com';
		$mail->FromName = 'Panther\'s Rift';
		$mail->addAddress($email,$name);
		$mail->addReplyTo('admin@panthersrift.com','Panther\'s Rift');

		$mail->isHTML(true);

		$body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		    <head>
		        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		        <title>Panther\'s Rift</title>

		        <style type="text/css">


		            /*////// RESET STYLES //////*/
		            body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}
		            table{border-collapse:collapse;}
		            img, a img{border:0; outline:none; text-decoration:none;}
		            h1, h2, h3, h4, h5, h6{margin:0; padding:0;}
		            p{margin: 1em 0;}

		            /*////// CLIENT-SPECIFIC STYLES //////*/
		            .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
		            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
		            table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
		            #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
		            img{-ms-interpolation-mode: bicubic;} /* Force IE to smoothly render resized images. */
		            body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */

		            /*////// MOBILE STYLES //////*/

		            /*
		                CSS selectors are written in attribute
		                selector format to prevent Yahoo Mail
		                from rendering media query styles on
		                desktop.
		            */

		            @media only screen and (max-width: 480px){
		                /*////// RESET STYLES //////*/
		                td[id="introductionContainer"], td[id="callToActionContainer"], td[id="eventContainer"], td[id="merchandiseContainer"], td[id="footerContainer"]{padding-right:10px !important; padding-left:10px !important;}
		                table[id="introductionBlock"], table[id="callToActionBlock"], table[id="eventBlock"], table[id="merchandiseBlock"], table[id="footerBlock"]{max-width:480px !important; width:100% !important;}
		                
		                /*////// CLIENT-SPECIFIC STYLES //////*/
		                body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
		                
		                /*////// GENERAL STYLES //////*/
		                h1{font-size:34px !important;}
		                h2{font-size:30px !important;}
		                h3{font-size:24px !important;}
		                
		                img[id="heroImage"]{height:auto !important; max-width:520px !important; width:100% !important;}
		                
		                td[class="introductionLogo"], td[class="introductionHeading"]{display:block !important;}
		                td[class="introductionHeading"]{padding:40px 0 0 0 !important;}
		                td[class="introductionContent"]{padding-top:20px !important;}
		                
		                td[class="callToActionContent"]{text-align:left !important;}
		                table[class="callToActionButton"]{width:100% !important;}
		                
		                td[id="eventBlockCell"]{padding-right:20px !important; padding-left:20px !important;}
		                table[class="eventBlockCalendar"]{width:100px !important;}
		                
		                td[id="merchandiseBlockCell"]{padding-right:20px !important; padding-left:20px !important;}
		                td[class="merchandiseBlockHeading"] h2{text-align:center !important;}
		                td[class="merchandiseBlockLeftColumn"], td[class="merchandiseBlockRightColumn"]{display:block !important; padding:0 0 20px 0 !important; width:100% !important;}

		                td[class="footerContent"]{font-size:15px !important;}
		                td[class="footerContent"] a{display:block;}
		            }
		        </style>
		    </head>
		    <body style="margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;width: 100%;">
		        <center>
		            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;background-color: #FFF;height: 100%;width: 100%;">
		                <tr>
		                    <td align="center" valign="top" id="bodyCell" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;height: 100%;width: 100%;">
		                        <!-- // BEGIN EMAIL -->
		                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;width: 100%;">
		                            <tr>
		                                <td align="center" valign="top" id="callToActionContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFF;padding: 40px;">

		                                    <!-- // BEGIN CALL-TO-ACTION BLOCK -->
		                                    <table border="0" cellpadding="0" cellspacing="0" width="520" id="callToActionBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		                                        <tr>
		                                            <td align="center" valign="top" class="introductionLogo" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		                                                <img src="http://panthersrift.com/assets/img/teemo-img.png" alt="Panther\'s Rift Logo" style="border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="200px">
		                                            </td>
		                                            <td align="left" valign="middle" class="introductionHeading" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;color: #EAEAEA;font-size: 14px;font-weight: bold;line-height: 150%;padding-left: 40px;">
		                                                <h1 style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;color: #333;font-size: 44px;font-weight: 200;line-height: 115%;text-align: left;">Panther\'s Rift</h1>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                    <!-- //END CALL-TO-ACTION BLOCK -->

		                                </td>
		                            </tr>
		                            <tr>
		                                <td align="center" valign="top" id="introductionContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #2980b9;padding: 40px;">

		                                    <!-- // BEGIN INTRO BLOCK -->
		                                    <table border="0" cellpadding="0" cellspacing="0" width="520" id="introductionBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		                                        <tr>
		                                            <td style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		                                                    <tr>
		                                                        <td align="left" valign="middle" class="introductionHeading" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;color: #000;font-size: 14px;font-weight: bold;line-height: 150%;padding-left: 40px;">
		                                                            <h1 style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;color: #EAEAEA;font-size: 44px;font-weight: 500;line-height: 115%;text-align: left;">Qualifier Confirmation</h1>
		                                                        </td>
		                                                    </tr>
		                                                </table>
		                                            </td>
		                                        </tr>
		                                        <tr>
		                                            <td align="left" valign="top" class="introductionContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;color: #fff;font-size: 18px;line-height: 150%;padding-top: 40px;">'
		                                                . $message .
		                                            '</td>
		                                        </tr>
		                                        <tr>
		                                            <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		                                                <table border="0" cellpadding="0" cellspacing="0" class="callToActionButton" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #F0F0F0;border-radius: 4px;box-shadow: 0 5px 0 #c0392b; margin-top:40px;">
		                                                    <tr>
		                                                        <td align="center" valign="top" class="callToActionButtonContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;padding-top: 20px;padding-right: 40px;padding-bottom: 20px;padding-left: 40px;color: #D83826;display: block;font-size: 24px;font-weight: bold;line-height: 100%;letter-spacing: -1px;text-align: center;text-decoration: none;">
		                                                            <a href="http://panthersrift.com/user/confirm.php?id='
		                                                            . $id . 
		                                                            '" target="_blank" title="square gallery" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #e74c3c;display: block;font-size: 24px;font-weight: bold;line-height: 100%;letter-spacing: -1px;text-align: center;text-decoration: none;">Confirm</a>
		                                                        </td>
		                                                    </tr>
		                                                </table>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                    <!-- END INTRO BLOCK // -->

		                                </td>
		                            </tr>
		                            <tr>
		                                <td align="center" valign="top" id="footerContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 40px;">

		                                    <!-- // BEGIN FOOTER BLOCK -->
		                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="footerBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		                                        <tr>
		                                            <td align="center" valign="top" class="footerContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;color: #333;font-size: 13px;line-height: 150%;padding-bottom: 40px;">
		                                                <strong>As always, we appreciate you taking the time to read our emails.
		                                                <br>
		                                                Thank you for your continued support!</strong>
		                                            </td>
		                                        </tr>
		                                        <tr>
		                                            <td align="center" valign="top" class="footerContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;color: #333;font-size: 13px;line-height: 150%;padding-bottom: 40px;">
		                                                &copy; ' . date('Y') . ' Panther\'s Rift
		                                            </td>
		                                        </tr>
		                                    </table>
		                                    <!-- END FOOTER BLOCK // -->

		                                </td>
		                            </tr>
		                        </table>
		                        <!-- END EMAIL // -->
		                    </td>
		                </tr>
		            </table>
		        </center>
		    </body>
		</html>';

		$mail->Subject 	= $subject;
		$mail->Body 	= $body;
		$mail->AltBody 	= $message;

		if(!$mail->send()){
			header("Location: admin/?mailed=false");
		}
		else {
			header("Location: admin/?mailed=true");
		}	
	}

?>