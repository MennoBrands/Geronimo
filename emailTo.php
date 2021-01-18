<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

require 'libraries/PHPMailer-master/src/PHPMailer.php';
require 'libraries/PHPMailer-master/src/SMTP.php';
require 'libraries/PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$sendToEmail = $_POST['email'];
echo $sendToEmail;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'GeronimoFontys@outlook.com';                     // SMTP username
    $mail->Password   = 'GeronimoWachtwoord123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('GeronimoFontys@outlook.com', 'Geronimo');
    $mail->addReplyTo('GeronimoFontys@outlook.com', 'Geronimo');
    $mail->addAddress($sendToEmail, 'Klant');

    $mail->AddEmbeddedImage('images/chefkokhelpt.jpg', 'my-photo', 'images/chefkokhelpt.jpg');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Geronimo: bevestiging cursus inschrijving';
    $mail->Body    = 'Beste klant,<br/><br/>

                        Met deze mail bevestigen wij jouw inschrijving voor de cursus: <br/><br/>
                        
                        <img height="300px" alt="PHPMailer" src="cid:my-photo"> <br/><br/>

                        <b>CURSUS:</b> 	CHEFKOK HELPT<br/>
                        <b>LOCATIE:</b> 	EINDHOVEN VESTDIJK 30 5611 VC<br/>
                        <b>DATUM:</b> 		Woensdag 16/12 14:30 tot 18:00 <br/><br/>
    
                        Voor vragen over de cursus kunt u terecht bij de cursus gever:<br/>
                        <b>NAAM:</b> 		Bram Smits<br/>
                        <b>TEL:</b> 		06-22263327<br/>
                        <b>EMAIL:</b> 		BramSmits@gmail.nl <br/><br/>
								
                        Kunt je de cursus gever niet bereiken? Of heeft u andere vragen aan Geronimo?<br/>
                        Dan kunt u ons bereiken op info@geronimo.nl<br/><br/>
                        
                        Met vriendelijke groeten,<br/><br/>
                        
                        Het Geronimo Team

                    ';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
    $message = "De conformatie mail is verzonden!";
    echo "<script>
            alert('$message');
            window.location.href='email.php';
          </script>";
} catch (Exception $e) {
    $message = "Er is iets fout gegaan.";
    echo "<script>
            alert('$message');
            window.location.href='email.php';
          </script>";
}
?>