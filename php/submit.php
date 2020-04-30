<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lf8wuwUAAAAAEk81ijPhkqfAvucwcTnp-9mHSu8';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {

        if(isset($_POST['submit'])) 
        { 
            $to = "andrei.lavrenov@gmail.com"; 
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $subject = htmlspecialchars($_POST["subject"]);
            $textarea = htmlspecialchars($_POST["message"]);
            $subject = $subject . " van " . $name . " (via formulier op poortcentrum.be)";

            $headers = "From: " . "bot@lavrenov.io" . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            $message = '<html><body style="font-family:Roboto, sans-serif">';
            // $message .= '<header style="width:100%; min-height:60px;"><img src="https://blokpauze.be/img/email__header.png" /></header>';
            $message .= '<div>';
                $message .= '<p style="font-weight: 400">' . $textarea . '</p>';
                $message .= '<br>';
                $message .= 'van ' . $name;
                $message .= '<br>';
                $message .= "De ReCaptcha score is " . $recaptcha->score . "/1";
            $message .= '</div>';
            $message .= '</body></html>';

            mail($to, $subject, $message, $headers);

            $confirmation__header = "VERZONDEN";
            $confirmation__title = "BEDANKT";
            $confirmation__message = "Wij contacteren u zo snel mogelijk terug.";
        }

    } else {
        $confirmation__header = "MISLUKT";
        $confirmation__title = "SORRY";
        $confirmation__message = "Onze verontschuldigingen voor deze probleem. Probeer opnieuw.";
    }

} ?>