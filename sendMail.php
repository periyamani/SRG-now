<?php 
// use PHPMailer\PHPMailer\PHPMailer;
require("PHPMailer/class.phpmailer.php");
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'periyamani.arch@gmail.com';
$mail->Password = 'manipriya';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('periyamani.arch@gmail.com', 'First Last');
$mail->addReplyTo('periyamani.arch@gmail.com', 'John Doe');
$mail->addAddress("periyamani.arch@gmail.com", 'Mani' );
$mail->isHTML(true);

$mail->Subject = "PHPMailer SMTP test";
// $mail->addEmbeddedImage('path/to/image_file.jpg', 'image_cid');
$mail->Body = '<img src="cid:image_cid"> Mail body in HTML';
$mail->AltBody = 'This is the plain text version of the email content';

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}

?>