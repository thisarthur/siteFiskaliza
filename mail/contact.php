<?php

require("/PHPMailer-master/src/PHPMailer.php");
require("/PHPMailer-master/src/SMTP.php");
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "smtp.titan.email";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "contato@fikaliza.com.br";
 $mail->Password = "123456";
 $mail->SetFrom("contato@fikaliza.com.br");
 $mail->Subject = $subject;
 $mail->Body = $body;


 if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Mensagem enviada com sucesso";
}

/*
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));


$subject = "$m_subject:  $name";
$body = "Você recebeu uma nova mensagem vinda de seu site.\n\n"."Detalhes:\n\nNome: $name\n\n\nEmail: $email\n\nAssunto: $m_subject\n\Mensagem: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
*/
  ?>
