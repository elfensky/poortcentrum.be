<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer6.1.7/src/Exception.php';
require 'phpmailer6.1.7/src/PHPMailer.php';
require 'phpmailer6.1.7/src/SMTP.php';

// echo "test";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
	$textarea = htmlspecialchars($_POST["message"]);
	$onderwerp = "Bericht van " . $name . " (via formulier)";

	// //CAPTCHA
	// $response = $_POST["g-recaptcha-response"];
	// $url = 'https://www.google.com/recaptcha/api/siteverify';

	// $data = array(
	// 	'secret' => 'YOUR_SECRET',
	// 	'response' => $_POST["g-recaptcha-response"]
	// );
	
	// $options = array(
	// 	'http' => array (
	// 		'method' => 'POST',
	// 		'content' => http_build_query($data)
	// 	)
	// );
	
	//PHPMailer Object
	$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

	//From email address and name
	$mail->From = "form@poortcentrum.be";
	$mail->FromName = $name;

	//To address and name
	$mail->addAddress("info@poortcentrum.be", "Eugeen Bosmans");

	//Address to which recipient will reply
	$mail->addReplyTo($email, $name);

	// //CC and BCC
	// $mail->addCC("cc@example.com");
	// $mail->addBCC("bcc@example.com");

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	$mail->Subject = $onderwerp;
	$mail->Body = "<p>$textarea</p><p>Persoon: $name<br>Email: $email<br>Tijd: " . date('m/d/Y h:i') . "</p>";
	$mail->AltBody = "$textarea | van: $name, via $email op " . date('m/d/Y h:i');

	try {
		$mail->send();
		// header('Location: ../bevestiging/verzonden');
		// echo "Message has been sent successfully";

		$confirmation__header = "VERZONDEN";
		$confirmation__title = "BEDANKT";
		$confirmation__message = "Wij contacteren u zo snel mogelijk terug.";

	} catch (Exception $e) {
		$error = $mail->ErrorInfo;
		// header('Location: ../bevestiging/mislukt');

		$confirmation__header = "MISLUKT";
		$confirmation__title = "SORRY";
		$confirmation__message = "Onze verontschuldigingen voor deze probleem. Probeer opnieuw, eventueel via een andere toestel . $error";
	}
}

else {
	header('Location: /404');
	// echo "no post";
}