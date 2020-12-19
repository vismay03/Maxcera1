<?php
include('../database/connection.php'); 
// CATEGORY ADD
session_start();
if (isset($_POST['addCategory'])) {
   
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $target_dir = "../uploads/category/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    echo $imageFileType;

    $check = getimagesize($_FILES["image"]["tmp_name"]);
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

    // Check file size
    if ($_FILES["image"]["size"] > 5000000) {
        $_SESSION['status'] =  "Sorry, your file is too large.";

        header("Location: ../admin.php");
        exit;
    }

    //Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

    ) {
        $_SESSION['status'] = "Sorry, only JPG, JPEG, PNG  files are allowed.";

        header("Location: ../admin.php");
        exit;
    }

    // Check if $uploadOk is set to 0 by an error

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $add_category_query = "INSERT INTO category (CName,  Image) VALUES ('$category','$image')";

        $add_category_result = $connection->query($add_category_query);
        if ($add_category_result) {
            $_SESSION['status'] = "Category Added Successfully";
            header("Location: ../admin.php", true,  301);
        } else {
            $_SESSION['status'] =  $connection->error;
            header("Location: ../admin.php");
        }
    }

    
    
}
