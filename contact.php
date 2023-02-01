<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "rm57460@ubt-uni.net"; // Replace with your email address
  $subject = "Contact Request from $name";
  
  $mail = new PHPMailer(true);
  
  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server hostname
    $mail->SMTPAuth = true;
    $mail->Username = 'rm57460@ubt-uni.net'; // Replace with your SMTP username
    $mail->Password = 'jxwdgiuirfblylrs'; // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    $mail->setFrom($email, $name);
    $mail->addAddress($to, 'Your Name');
    $mail->Subject = $subject;
    $mail->Body = $message;
    
    $mail->send();
    echo "Message sent successfully.";
  } catch (Exception $e) {
    echo "Error sending message: " . $mail->ErrorInfo;
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
</head>

<body>
<form action="contact.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  
  <label for="message">Message:</label>
  <textarea id="message" name="message"></textarea><br><br>
  
  <input type="submit" value="Submit">
  <li>
    <a href="index.html">Return to home page</a>
  </li>

</form>
</body>

</html>