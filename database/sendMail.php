<?php
session_start();

include('../database/connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
 
$phone = $_POST['phone'];
$message = $_POST['message'];

$add_mail_query = "INSERT INTO mail (Name, Email, Phone, Message) VALUES ('$name','$email','$phone','$message')";



$add_mail_result = $connection->query($add_mail_query);
if ($add_mail_result) {
    $_SESSION['status'] = 'Your message was sent';
    header("Location: ../admin.php");
    exit;
} else {
    $_SESSION['status'] =  $connection->error;
    header("Location: ../admin.php");
    exit;
}

header('Location: ../contact.php');
?>