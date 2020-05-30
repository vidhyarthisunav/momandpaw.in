<?php

require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 2;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;

  $mail->Username = 'petcare@momandpaw.in';
  $mail->Password = 'MOMANDPAW';

  $mail->From = 'petcare@momandpaw.in';
  $mail->FromName = 'MOM & PAW';

  $mail->addAddress($_REQUEST['subs'], "Subscriber");

  $mail->addReplyTo('petcare@momandpaw.in', 'reply');

  $mail->WordWrap = 50;
  $mail->isHTML(true);

  $mail->Subject = "You have successfully subscribed to our newsletter!";
  $mail->Body    = "Hi,<br/><br/>Thanks for being awesome! You`re succesfully subscribed to our newsletter! <br/><br/>Looking forward to get your first order,<br/><br/>Team Mom and Paw";
  if(!$mail->send()) {
    echo 'Mail not sent';
    exit;
  }
  header("Location: http://momandpaw.in");
  return;

?>