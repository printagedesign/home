
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
ini_set('max_execution_time', 300);
ini_set('memory_limit', '-1');
error_reporting(E_ALL);

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'cs-mum-17.webhostbox.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@travcoupz.com';                 // SMTP username
    $mail->Password = '(RE(gJkd~#FZ';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;
    $mail->Timeout =  30;

    //Recipients
    $mail->setFrom('siddheshr0@gmail.com', 'Sidd');
    $mailBody = 'Congratulations! You have been registered successfully for SEAIR Data subscription!!';
    $mailBody .='<br/>';
    $mailBody .='Please click below link to login:';
    $mailBody .='<a href="http://onlinedashboard.in/login.php?action=
    Your username is :<br/>Password:<br/>
    Please change your password.<br/>
    Regards,<br/>
    Sales Team,<br/>
    SEAIR';

    $mail->addAddress("siddheshr0@gmail.com", "anik");     // Add a recipient
    $mail->addReplyTo('siddheshr0@gmail.com', 'Information');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Registration Confirmation: SEAIR';
    $mail->Body    = $mailBody;
    ///$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>