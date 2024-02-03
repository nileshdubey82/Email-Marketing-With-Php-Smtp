<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$name = "reciever name";
$recipient=$_POST['recipient'];
$email_subj= $_POST['subject'];
$email_message= $_POST['message'];
$email_attach_file=$_FILES['attach_file'];

?>
<code>
<?php
// print_r($_POST);
?>
</code>
<?php



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

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
    $mail->Password = 'qniv muro anpl imts'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($recipient, 'My Project Mail Marketing');
    $mail->addAddress($recipient, $name); //Add a recipient
    $mail->addAddress($recipient); //Name is optional
    $mail->addReplyTo('nileshdubey060@gmail.com', 'Owner');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
    // $mail->addAttachment('tree-736885_1280.jpg', ' new.jpg'); //Optional name

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = $email_subj;
    $mail->Body = $email_message;
    // $mail->AddEmbeddedImage('https://www.rungtacolleges.com/news/wp-content/uploads/2016/10/logo.png', 'logo');
    $mail->send();
    header("location:SingleMail.php?v=1");
} catch (Exception $e) {
    header("location:SingleMail.php?v=2");
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
