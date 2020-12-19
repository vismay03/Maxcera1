<?php
include('../database/connection.php');
session_start();
if (isset($_POST['deletePremium'])) {


    $id =  $_POST['id'];
    $image = $_POST['Image'];
    $target_file = "../uploads/premium/".$image;
    unlink($target_file);


    $delete_premium_query = "DELETE FROM premium WHERE id='$id'";

    $delete_premium_result = $connection->query($delete_premium_query);






    if ($delete_premium_result) {
        $_SESSION['status'] = "Premium Image Deleted Successfully";
    } else {
        $_SESSION['status'] = $connection->error;
    }
}
header("Location: ../admin.php");
