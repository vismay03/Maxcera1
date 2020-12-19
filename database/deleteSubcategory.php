<?php
include('../database/connection.php');
if (isset($_POST['deleteSubcategory'])) {


    $id =  $_POST['id'];
    $category =  $_POST['category'];
    $image = $_POST['Image'];
    $subcategory = $_POST['subcategory'];
    $target_file = "../uploads/subcategory/".$image;
    unlink($target_file);

    $delete_category_query = "DELETE FROM product WHERE Subcategory='$subcategory'";

    $delete_category_result = $connection->query($delete_category_query);

    $delete_subcategory_query = "DELETE FROM subcategory WHERE id='$id'";

    $delete_subcategory_result = $connection->query($delete_subcategory_query);
    if ($delete_subcategory_result && $delete_category_result) {
        $_SESSION['status'] = "Subcategory Deleted Successfully";
    } else {
        $_SESSION['status'] = $connection->error;
    }
    
}
header("Location: ../admin.php");
