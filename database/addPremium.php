<?php
include('../database/connection.php');
// CATEGORY ADD
session_start();
if (isset($_POST['addPremium'])) {

    $category = $_POST['category'];
    $image = $_FILES['Image']['name'];
    $target_dir = "../uploads/premium/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    echo $imageFileType;

    $check = getimagesize($_FILES["Image"]["tmp_name"]);
    if ($check !== false) {
        $_SESSION['status'] = "File is an image - " . $check["mime"] . ".";
    } else {
        $_SESSION['status'] =  "File is not an image.";
        header("Location: ../admin.php");
        exit;
    }

    if (file_exists($target_file)) {
        $_SESSION['status'] = "Sorry, file already exists.";

        header("Location: ../admin.php");
        exit;
    }


   
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

    ) {
        $_SESSION['status'] = "Sorry, only JPG, JPEG, PNG  files are allowed.";

        header("Location: ../admin.php");
        exit;
    }

  

    if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
        $add_premium_query = "INSERT INTO premium (Image) VALUES ('$image')";

        $add_premium_result = $connection->query($add_premium_query);
        if ($add_premium_result) {
            $_SESSION['status'] = "Premium Image Added Successfully";
            header("Location: ../admin.php");
        } else {
            $_SESSION['status'] =  $connection->error;
            header("Location: ../admin.php");
        }
    }
}
