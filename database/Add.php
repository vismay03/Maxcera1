<?php
include('../database/connection.php');

// PRODUCT ADD
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["Image"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST['Add'])) {
   
    $name = $_POST['Name'];
    $model = $_POST['Model'];
    $size = $_POST['Size'];
    $image = $_FILES['Image']['name'];
    $subcategory = $_POST['Subcategory'];

    $check = getimagesize($_FILES["Image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["Image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["Image"]["name"])) . " has been uploaded.";
            $add_product_query = "INSERT INTO product (Name, Model, Size, Image, Subcategory) VALUES ('$name','$model','$size','$image','$subcategory')";



            $add_product_result = $connection->query($add_product_query);
            if ($add_product_result) {
                echo "Success";
            } else {
                echo $connection->error;
            }
   
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
   
  header("Location: ../admin.php");
}


?>