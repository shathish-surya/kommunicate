<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.zoho.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Username='indianhacker@zoho.in';
$mail->Password='XpkQCC0FEJ7x';
$mail->setFrom('shathishsurya2002@gmail.com','shathish');
$mail->addAddress('rasv326@gmail.com');
$mail->addReplyTo('rasv326@gmail.com');
$mail->isHTML(true);
$mail->Subject='Regarding';
$mail->Body='<h1>Hello</h1>';
if(!$mail->send()){
echo "Not send";
}
else{
echo "success";
}

?>
