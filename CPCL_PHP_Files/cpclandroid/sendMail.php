<?php

require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->Host = "smtp.zoho.in";
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->Pool = true;
$mail->SMTPAuth = true; 
$mail->Mailer = 'smtp';
$mail->Username = "";
$mail->Password = "";

$mail->setFrom("", "CPCL");
$mail->addReplyTo("", "CPCL");
$mail->addAddress("");

$mail->isHTML(true);
$mail->Subject = "Test";
$mail->Body = "Test";


 if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
?>








































<?php 
// // Import PHPMailer classes into the global namespace
// // These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer;
// use PHPMailer\SMTP;
// use PHPMailer\Exception;

// // Load Composer's autoloader
// // require 'PHPMailer/PHPMailerAutoload.php';
// spl_autoload_register(function($class) {
//     include 'classes/' . $class . '.class.php';
// });

// // Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
//     $mail->isSMTP();                                            // Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'bluebase2017@gmail.com';               // SMTP username
//     $mail->Password   = 'nbbfmqcsmsnfxmhm';                     // SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//     $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//     //Recipients
//     $mail->setFrom('bluebase2017@gmail.com', 'CPCL');
//     $mail->addReplyTo('bluebase2017@gmail.com', 'CPCL');
//     $mail->addAddress('mohanakrishnan.s@bluebase.in');     // Add a recipient            // Name is optional


//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
?>
