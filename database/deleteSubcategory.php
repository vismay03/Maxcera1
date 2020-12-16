<?php
include('../database/connection.php');
if (isset($_POST['Delete'])) {


    $id =  $_POST['id'];

    $delete_subcategory_query = "DELETE FROM subcategory WHERE id='$id'";

    $delete_subcategory_result = $connection->query($delete_subcategory_query);
    if ($delete_subcategory_result) {
        echo "Success";
    } else {
        echo $connection->error;
    }
    
}
header("Location: ../admin.php", true,  301);
