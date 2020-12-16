<?php
include('../database/connection.php');
if (isset($_POST['Delete'])) {


    $category =  $_POST['CName'];

    $delete_category_query = "DELETE FROM category WHERE CName='$category'";

    $delete_category_result = $connection->query($delete_category_query);
    if ($delete_category_result) {
        echo "Success";
    } else {
        echo $connection->error;
    }
}
header("Location: ../admin.php");
