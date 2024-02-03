<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$name = "Nilesh Prsad Dubey";
$email = "nileshdubey060@gmail.com";
$mobile = "6267751993";
$fromDate = "2023-07-20";
$toDate = "2023-07-20";
$roomNumber = "ROOM101";
$numberOfPersons = "2";
$numberOfChilds = "1";
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'nileshdubey060@gmail.com'; //SMTP username
    $mail->Password = 'nrpmbswpyslqiqtx'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nileshpooja063@gmail.com', 'Swaram - Hotels & Resorts ');
    $mail->addAddress('nileshpooja063@gmail.com', 'Nilesh DUbey'); //Add a recipient
    $mail->addAddress('nileshpooja063@gmail.com'); //Name is optional
    $mail->addReplyTo('nileshdubey060@gmail.com', 'Owner');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
    // $mail->addAttachment('tree-736885_1280.jpg', ' new.jpg'); //Optional name

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Room Booking Confirmation';
    $mail->Body = "<!DOCTYPE html>
    <html>
    <head>
      <title>Room Booking Confirmation</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          line-height: 1.6;
        }
        .container {
          max-width: 600px;
          margin: 0 auto;
          padding: 20px;
          border: 1px solid #ccc;
          background-color: #f9f9f9;
        }
        .header {
          text-align: center;
          margin-bottom: 20px;
        }
        .thank-you {
          color: #2ecc71;
          font-size: 18px;
        }
        .alert {
          color: #e74c3c;
          font-size: 18px;
          margin-bottom: 10px;
        }
        .info {
          margin-bottom: 10px;
        }
        img {
          max-width: 100%;
          margin-bottom: 20px;
        }
      </style>
    </head>
    <body>
      <div class='container'>
        <div class='header'>
          <h1>Room Booking Confirmation</h1>
        </div>
        <p class='thank-you'>Dear $name,</p>
        <p class='thank-you'>Thank you for booking a room with us. Your reservation has been confirmed.</p>
        <div class='info'>
          <p><strong>Name:</strong> $name</p>
          <p><strong>Email:</strong> $email</p>
          <p><strong>Mobile:</strong> $mobile</p>
          <p><strong>From Date:</strong> $fromDate</p>
          <p><strong>To Date:</strong> $toDate</p>
          <p><strong>Room Number:</strong> $roomNumber</p>
          <p><strong>Number of Persons:</strong> $numberOfPersons</p>
          <p><strong>Number of Children:</strong>$numberOfChilds</p>
        </div>
        <p class='alert'>Please note that an email has been sent to the admin for further processing.</p>
        <img src='https://swaramresort.com/assets/img/logos/logo-2.png' alt='Booking Image'>
      </div>
    </body>
    </html>";
    // $mail->AddEmbeddedImage('https://swaramresort.com/assets/img/logos/logo-2.png', 'logo');
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}