<?php
include('../database/connection.php');
session_start();
if (isset($_POST['deleteCategory'])) {


    $category =  $_POST['category'];
    $pageImg = $_POST['pageImg'];
    $image = $_POST['Image'];
    $target_file1 = "../uploads/category/".$image;
    $target_file2 = "../uploads/category/" . $pageImg;
    unlink($target_file1);
    unlink($target_file2);

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
