<?php
include('../database/connection.php');
if (isset($_POST['Delete'])) {


    $id =  $_POST['id'];
   
    $delete_product_query = "DELETE FROM product WHERE id='$id'";

    $delete_product_result = $connection->query($delete_product_query);
    if ($delete_product_result) {
        echo "Success";
    } else {
        echo $connection->error;
    }
    
}
header("Location: ../admin.php", true,  301);

?>