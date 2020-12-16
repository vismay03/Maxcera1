 <?php
    ob_start();
    include('../database/connection.php');
    if (isset($_POST['updateSubcategory'])) {

        $id = $_POST['id'];
        $category = $_POST['category'];
        $image = $_FILES['Image']['name'];
        $subcategory = $_POST['subcategory'];
        $update_subcategory_query = "UPDATE subcategory SET CName='$category', SName='$subcategory', Image='$image'  WHERE id='$id'";

        $update_subcategory_result = $connection->query($update_subcategory_query);
        if ($update_subcategory_result) {
            echo "Success";
        } else {
            echo $connection->error;
        }
        header("Location: ../admin.php", true,  301);
    }

    ob_end_flush();
    ?>