 <?php

    include('../database/connection.php');

    session_start();
    echo "nh";
    if ($_POST['updateProduct']) {
        $name = $_POST['Name'];
        $model = $_POST['Model'];
        $size = $_POST['Size'];
         $id =  $_POST['id'];
        $subcategory = $_POST['Subcategory'];
       echo !$_FILES['Image']['name']=="";
    if (!$_FILES['Image']['name'] == "") { 
        echo $name;
        $existing_image = $_POST['existing_image'];
        echo $existing_image;
        $target_file = "../uploads/product/" .$existing_image;
        unlink($target_file);
        $image = $_FILES['Image']['name'];
          
            $target_dir = "../uploads/product/";
            $target_file = $target_dir . basename($_FILES["Image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["Image"]["tmp_name"]);
            if ($check !== false
            ) {
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

                // header("Location: ../admin.php");
                exit;
            }
            if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
                $update_product_query = "UPDATE product SET Name='$name', Model='$model', Size='$size', Image='$image', Subcategory='$subcategory' WHERE id='$id'";



                $update_product_result = $connection->query($update_product_query);
                if ($update_product_result) {
                    $_SESSION['status'] = "Product Updated Successfully";
                    header("Location: ../admin.php");
                    exit;
                } else {
                    $_SESSION['status'] =  $connection->error;
                    header("Location: ../admin.php");
                    exit;
                }
            }
    }
    else{
            $image = $_POST['existing_image'];
            $update_product_query = "UPDATE product SET Name='$name', Model='$model', Size='$size', Image='$image', Subcategory='$subcategory' WHERE id='$id'";



            $update_product_result = $connection->query($update_product_query);
            if ($update_product_result) {
                $_SESSION['status'] = "Product Updated Successfully";
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