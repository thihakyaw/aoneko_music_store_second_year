<?php



require_once('phpmailer/PHPMailerAutoload.php');
require_once ('phpmailer/class.smtp.php');


$email=$_GET['email'];
$user=$_GET['username'];

$localhost = "localhost";
$username = "root";

$conn = mysql_connect($localhost,$username,'');

//Create Database
mysql_select_db('aoneko',$conn);

$mysql_retrieve_password="SELECT * FROM user WHERE username='$user' AND email='$email'";
$retrieve_password=mysql_query($mysql_retrieve_password,$conn);
while($row=mysql_fetch_assoc($retrieve_password))
{
  $password=$row['password'];
}


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->SMTPDebug = 1;
$mail->Username = 'aoneko.music@gmail.com';                 // SMTP username
$mail->Password = 'aonekoaonekoaoneko';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('aoneko.music@gmail.com', 'Ao Neko Music Store');
$mail->addAddress($email);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('aoneko.music@gmail.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "You Request Your Password At Ao Neko Music Store";
$mail->Body    = "Here is your passwords :".$password;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    header('Location:mailcomplete.php');
}

//Note: Example as in the download: /examples/test_smtp_gmail_b

/*
$name=$_POST['name'];
$mail_to=$_POST['email'];
$mail_content=$_POST['mail_content'];
$mail_subject=$_POST['subject'].$name;
$mail_from="vocaloidthihakyaw@gmail.com";
$mail_header="From: ".$name."<".$mail_from.">r/n";

//ini_set("SMTP")

$send_mail=mail($mail_to,$mail_subject,$mail_content,$mail_header);

if($send_mail==true)
{
  echo "Yeap";
}
else {
  echo "Sad life";
}
*/
 ?>
