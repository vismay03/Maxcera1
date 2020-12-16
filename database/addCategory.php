<?php
include('../database/connection.php'); 
// CATEGORY ADD

if (isset($_POST['addCategory'])) {
   
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $add_category_query = "INSERT INTO category (CName,  Image) VALUES ('$category','$image')";

    $add_category_result = $connection->query($add_category_query);
    if ($add_category_result) {
        echo "Success";
    } else {
        echo $connection->error;
    }
    header("Location: ../admin.php", true,  301);
}
