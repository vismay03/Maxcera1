<?php
include('../database/connection.php'); 
// SUBCATEGORY ADD

if (isset($_POST['addSubcategory'])) {
    $subcategory =  $_POST['subcategory'];
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $add_subcategory_query = "INSERT INTO subcategory (CName, SName, Image) VALUES ('$category','$subcategory','$image')";

    $add_subcategory_result = $connection->query($add_subcategory_query);
    if ($add_subcategory_result) {
        echo "Success";
    } else {
        echo $connection->error;
    }
    header("Location: ../admin.php", true,  301);
}


?>