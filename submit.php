<?php
require 'phpmailer/PHPMailerAutoload.php';

// Database connection details
$servername = 'localhost';
$username = 'your_mysql_username';
$password = 'your_mysql_password';
$dbname = 'your_database_name';

// Create a new PHPMailer instance
$mail = new PHPMailer;

// SMTP configuration for sending email through Gmail
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = '564pranoy@gmail.com'; // Your Gmail email address
$mail->Password = '123h2so4'; //
