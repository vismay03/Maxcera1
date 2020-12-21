<?php
include('../database/connection.php'); 
// SUBCATEGORY ADD

session_start();

if (isset($_POST['addSubcategory'])) {
    $subcategory =  $_POST['subcategory'];
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];

    $target_dir = "../uploads/subcategory/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    

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
        $add_subcategory_query = "INSERT INTO subcategory (CName, SName, Image) VALUES ('$category','$subcategory','$image')";

        $add_subcategory_result = $connection->query($add_subcategory_query);
        if ($add_subcategory_result) {
            $_SESSION['status'] = "subcategory Added Successfully";
            header("Location: ../admin.php", true,  301);
        } else {
            $_SESSION['status'] = $connection->error;
            header("Location: ../admin.php");
        }
    }



    header("Location: ../admin.php"); 
    
}


?>