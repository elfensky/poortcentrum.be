<?php
// require 'phpmailer6.1.7/src/Exception.php';
// require 'phpmailer6.1.7/src/PHPMailer.php';
// require 'phpmailer6.1.7/src/SMTP.php';

require 'phpmailer6.8.1/src/Exception.php';
require 'phpmailer6.8.1/src/PHPMailer.php';
require 'phpmailer6.8.1/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
	$gemeente = htmlspecialchars($_POST["gemeente"]);
	$postcode = htmlspecialchars($_POST["postcode"]);
	$textarea = htmlspecialchars($_POST["message"]);

    if(empty($name) || empty($email) || empty($gemeente) || empty($postcode) || empty($textarea)) {

        $data = [
            "name" => empty($name),
            "email" => empty($email),
            "gemeente" => empty($gemeente),
            "postcode" => empty($postcode),
            "textarea" => empty($textarea)
        ];

        // $form_error_message = urlencode(http_build_query($data));
        $form_error_message = http_build_query($data);


        $_SESSION['error_message'] = $error_message; // store error message in session
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?formerror=' . $form_error_message . '#contact'); // redirect back to the previous page
        exit;
     }     


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
	$mail->CharSet = 'UTF-8';

	//From email address and name
	$mail->From = "form@poortcentrum.be";
	$mail->FromName = $name;

	//To address and name
	$mail->addAddress("andrei@lavrenov.io", "Andrei Lavrenov");

	//Address to which recipient will reply
	$mail->addReplyTo($email, $name);

	// //CC and BCC
	// $mail->addCC("cc@example.com");
	// $mail->addBCC("bcc@example.com");

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	$mail->Subject = "Bericht van " . preg_replace('/[0-9]+/', '', $name) . " in " .  preg_replace('/[0-9]+/', '', $gemeente) . " (via formulier)";
	$mail->Body = "<p>$textarea</p>
					<p>Persoon: $name<br/>
					Email: $email<br/>
					Tijd: " . date('m/d/Y h:i') . "<br/>
					Locatie: $postcode | $gemeente </p>";
	$mail->AltBody = "$textarea | van: $name, via $email op " . date('m/d/Y h:i');

	try {
		$mail->send();

		$confirmation__header = "VERZONDEN";
		$confirmation__title = "BEDANKT";
		$confirmation__message = "Wij contacteren u zo snel mogelijk terug.";
	} catch (Exception $e) {
		$error = $mail->ErrorInfo;

		$confirmation__header = "MISLUKT";
		$confirmation__title = "SORRY";
		$confirmation__message = "Onze verontschuldigingen voor deze probleem. Probeer opnieuw, eventueel via een andere toestel . $error";
	}
} else {
	header('Location: /404');
	// echo "no post";
}
