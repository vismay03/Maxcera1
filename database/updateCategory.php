 <?php
  
    include('../database/connection.php');

    session_start();

    if (isset($_POST['updateCategory'])) {

       $id = $_POST['id'];
        $category = $_POST['Category'];
        $image = $_FILES['Image']['name'];
       
        if (!$_FILES['Image']['name'] == "") {
          
            $existing_image = $_POST['existing_image'];
          
            echo $existing_image;
            

            $target_file = "../uploads/category/" . $existing_image;
            unlink($target_file);
            $image = $_FILES['Image']['name'];

            $target_dir = "../uploads/category/";
            $target_file = $target_dir . basename($_FILES["Image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["Image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
            } else {
                $_SESSION['status'] =  "File is not an image.";
                header("Location: ../admin.php");
                exit;
            }

            if (file_exists($target_file)) {
                $_SESSION['status'] = "Sorry, file already exists.";

                header("Location: ../admin.php");
                exit;
            }

            // Check file size
            if ($_FILES["Image"]["size"] > 5000000) {
                $_SESSION['status'] =  "Sorry, your file is too large.";

                header("Location: ../admin.php");
                exit;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

            ) {
                $_SESSION['status'] = "Sorry, only JPG, JPEG, PNG  files are allowed.";

                header("Location: ../admin.php");
                exit;
            }
            if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
              
                $update_category_query = "UPDATE category SET CName='$category',Image='$image'  WHERE CName='$id'";

                $update_category_result = $connection->query($update_category_query);
                if ($update_category_result) {
                    $_SESSION['status'] = "Category Updated Successfully";
                    header("Location: ../admin.php");
                    exit;
                } else {
                    $_SESSION['status'] =  $connection->error;
                    header("Location: ../admin.php");
                    exit;
                }
            }
        } else {
            $image = $_POST['existing_image'];
            $update_category_query = "UPDATE category SET CName='$category',Image='$image'  WHERE CName='$id'";

            $update_category_result = $connection->query($update_category_query);
            if ($update_category_result) {
                $_SESSION['status'] = "Category Updated Successfully";
                header("Location: ../admin.php");
                exit;
            } else {
                $_SESSION['status'] =  $connection->error;
                header("Location: ../admin.php");
                exit;
            }
        }
    

     
    }

    ?>