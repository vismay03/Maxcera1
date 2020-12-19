<?php
include('../database/connection.php');
session_start();
if (isset($_POST['deleteCategory'])) {


    $category =  $_POST['category'];
    $image = $_POST['Image'];
    $target_file = "../uploads/category/".$image;
    unlink($target_file);
    

    $delete_subcategory_query = "DELETE FROM subcategory WHERE CName='$category'";

    $delete_subcategory_result = $connection->query($delete_subcategory_query);


   
 

    $delete_category_query = "DELETE FROM category WHERE CName='$category'";


    
    $delete_category_result = $connection->query($delete_category_query);
    


    if ($delete_category_result && $delete_subcategory_query) {
        $_SESSION['status'] = "Category Deleted Successfully";
    } else {
        $_SESSION['status'] = $connection->error;
    }
}
header("Location: ../admin.php");
