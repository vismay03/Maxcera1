 <?php
  
    include('../database/connection.php');
    if (isset($_POST['updateCategory'])) {

       $id = $_POST['id'];
        $category = $_POST['Category'];
        $image = $_FILES['Image']['name'];
        echo $category;
        $update_category_query = "UPDATE category SET CName='$category',Image='$image'  WHERE CName='$id'";

        $update_category_result = $connection->query($update_category_query);
        if ($update_category_result) {
            echo "Success";
        } else {
            echo $connection->error;
        }
     header("Location: ../admin.php");
    }

    ?>