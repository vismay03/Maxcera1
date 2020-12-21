<?php
include('../database/connection.php');
// CATEGORY ADD
session_start();
if (isset($_POST['addSubcategory'])) {

    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $image = $_FILES['image']['name'];
    $target_dir = "../uploads/subcategory/";
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



    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

    ) {
        $_SESSION['status'] = "Sorry, only JPG, JPEG, PNG  files are allowed.";

        header("Location: ../admin.php");
        exit;
    }



    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $add_premium_query = "INSERT INTO subcategory (CName, SName,Image) VALUES ('$category', '$subcategory', '$image')";

        $add_premium_result = $connection->query($add_premium_query);
        if ($add_premium_result) {
            $_SESSION['status'] = "Subcategory addded Successfully";
            header("Location: ../admin.php");
        } else {
            $_SESSION['status'] =  $connection->error;
            header("Location: ../admin.php");
        }
    }
}
