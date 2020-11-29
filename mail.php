<?php

if ( $_POST ) {

	$frm_name  = 'Sonia Hoareau'; // your name
	$recepient = 'shoareau@orange.fr'; // your e-mail
	$sitename  = 'Portfolio Sonia Hoareau'; // your site name
	$subject   = "Nouveau contact de \"$sitename\""; // subject template

	$name  = trim( $_POST['visitor_name'] );
	$email = trim( $_POST['visitor_email'] );
	$msg   = trim( $_POST['visitor_msg'] );

	$message = "
	-------------------<br><br>
	Nom du contact : $name <br>
	Email du contact : $email <br><br>
	$msg
	<br><br>-------------------
	";

	mail( $recepient, $subject, $message, "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset="utf-8"' );

}
