<?php
include('../database/connection.php');

if (isset($_POST['Delete'])) {

    session_start();
    $id =  $_POST['id'];
   $image = $_POST['image'];
   echo $image;
    $target_file = "../uploads/product/" .$image;
   unlink($target_file);
    $delete_product_query = "DELETE FROM product WHERE id='$id'";

    $delete_product_result = $connection->query($delete_product_query);
    if ($delete_product_result) {
        $_SESSION['status'] =  "Product Deleted Successfully";
    } else {
        $_SESSION['status'] =  $connection->error;
    }
    
}
header("Location: ../admin.php", true,  301);

?>