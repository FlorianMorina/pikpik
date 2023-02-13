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
  
  $to = ""; // Replace with your email address
  $subject = "Contact Request from $name";
  
  $mail = new PHPMailer(true);
  
  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server hostname
    $mail->SMTPAuth = true;
    $mail->Username = ''; // Replace with your SMTP username
    $mail->Password = ''; // Replace with your SMTP password
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
<meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <title>Contact Us | pikpik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<!-- <form action="contact.php" method="post">
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

</form> -->

  <div class="signIn-wrapper">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap" style="width: 100%;">
                    <form action="contact.php" method="post" name="myForm" class="sign-in-form">
                        <div class="logo">
                            <a href="#"><img src="images/logo/black-logo.png" alt="logo"></a>
                        </div>

                        <div class="heading" style="margin-top: 10%;">
                            <h2>Contact Us!</h2>
                        </div>

                        <div class="actual-form">
                      
                                <label for="name"></label>
                                <input class="input-field" type="text" id="name" name="name" placeholder="Enter your name"><br><br>
                                
                                <label for="email"></label>
                                <input class="input-field" type="email" id="email" name="email" placeholder="Enter your email"><br><br>
                                
                                <label for="message"></label>
                                <textarea class="input-field" id="message" name="message" placeholder="Enter your message" style="height: 100px;"></textarea><br><br>
                                
                                <input class="btn green" style="border: transparent; font-weight: 600;" type="submit" value="Submit">
                                
                                <p>
                                  <a href="index.php" style="color: #CCCCCC; font-size:14px;">Return to home page</a>  
                                </p>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>