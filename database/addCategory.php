<?php
include('../database/connection.php'); 
// CATEGORY ADD
session_start();
if (isset($_POST['addCategory'])) {
   
    $category = $_POST['category'];
    $desc = $_POST['desc'];
    $image = $_FILES['image']['name'];
    $pageImg = $_FILES['pageImg']['name'];
    echo $pageImg;
    $target_dir = "../uploads/category/";
    $target_file1 = $target_dir . basename($_FILES["image"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["pageImg"]["name"]);
    $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

    
    $checkImg = getimagesize($_FILES["image"]["tmp_name"]);
    $checkPageImg = getimagesize($_FILES["pageImg"]["tmp_name"]);
    if ($checkImg !== false && $checkPageImg !== false) {
        $_SESSION['status'] = "File is an image - " . $checkImg["mime"] . ".";
    } else {
        $_SESSION['status'] =  "File is not an image.";
        header("Location: ../admin.php");
        exit;
    }

    if (file_exists($target_file1) && file_exists($target_file2)) {
        $_SESSION['status'] = "Sorry, file already exists.";

        header("Location: ../admin.php");
        exit;
    }

    

    //Allow certain file formats
    if (
        $imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" &&
    $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
    ) {
        $_SESSION['status'] = "Sorry, only JPG, JPEG, PNG  files are allowed.";

        header("Location: ../admin.php");
        exit;
    }

    // Check if $uploadOk is set to 0 by an error

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["pageImg"]["tmp_name"], $target_file2)) {
        $add_category_query = "INSERT INTO category (CName,  Image, pageImg, description) VALUES ('$category','$image', '$pageImg', '$desc')";

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
