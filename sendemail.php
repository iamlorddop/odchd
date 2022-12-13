<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/SMTP.php";

$mail = new PHPMailer(true);
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.gmail.com';  //Set the SMTP server to send through
$mail->SMTPAuth = true;  //Enable SMTP authentication
$mail->Username  = 'chistoye.delo@gmail.com'; //SMTP username
$mail->Password  = 'sjeiezoeeyrsdxth';  //SMTP password
$mail->SMTPSecure = "tls";  //Enable implicit TLS encryption
$mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->CharSet = "UTF-8";
$mail->IsHTML(true);

$mail->setFrom("chistoye.delo@gmail.com", "ОДЧД");
// send to
$mail->addAddress("chistoye.delo@gmail.com", "ОДЧД");

$theme = '[ХОЧУ ОБРАТИТЬСЯ В ОДЧД]';
$mail->Subject = $theme;

// letter's body
$body = '<h1>Данные обращения:</h1>';

$firstname = $_POST["firstname"];
$surname = $_POST["surname"];
$email = $_POST["email"];

if (trim(!empty($firstname))) {
	$body .= '<p><strong>Имя:</strong> ' . $firstname . '</p>';
}
if (trim(!empty($surname))) {
	$body .= '<p><strong>Имя:</strong> ' . $surname . '</p>';
}
if (trim(!empty($email))) {
	$body .= '<p><strong>От:</strong> ' . $email . '</p>';
}
$mail->Body = $body;

// send
if (!$mail->send()) {
	$message = 'Ошибка!';
} else {
	$message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);

$mail->smtpClose();
