<?php
session_start();

$ToEmail = 'vismaykatharani03@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$mailheader = "From: " . $_POST["email"] . "\r\n";
$mailheader .= "Reply-To: " . $_POST["email"] . "\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$phone = $_POST['phone'];
$message = $_POST['message'];

$EmailSubject = 'Maxcera Enquiry';
$MESSAGE_BODY = "Name: " . $_POST["name"] . "";
$MESSAGE_BODY .= "Email: " . $_POST["email"] . "";
$MESSAGE_BODY .= "Comment: " . nl2br($_POST["message"]) . "";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die("Failure"); 
$_SESSION['status'] = 'Your message was sent';
header('Location: ../contact.php');
?>