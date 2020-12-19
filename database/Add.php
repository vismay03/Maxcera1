<?php
include('../database/connection.php');

// PRODUCT ADD
$target_dir = "../uploads/product/";
$target_file = $target_dir . basename($_FILES["Image"]["name"]);


$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST['Add'])) {
    session_start();
    $name = $_POST['Name'];
    $model = $_POST['Model'];
    $size = $_POST['Size'];
    $image = $_FILES['Image']['name'];
    $subcategory = $_POST['Subcategory'];

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

    // Check file size
    if ($_FILES["Image"]["size"] > 5000000) {
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
  
        if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
            $add_product_query = "INSERT INTO product (Name, Model, Size, Image, Subcategory) VALUES ('$name','$model','$size','$image','$subcategory')";



            $add_product_result = $connection->query($add_product_query);
            if ($add_product_result) {
                $_SESSION['status'] = "Uploaded Successfully";
                header("Location: ../admin.php");
                exit;
            } else {
                $_SESSION['status'] =  $connection->error;
                header("Location: ../admin.php");
            exit;
            }
   
       
    }
   
 
 
}
