 <?php

    include('../database/connection.php');

    session_start();

    if (isset($_POST['updateSubcategory'])) {

        $id = $_POST['id'];
        $category = $_POST['category'];
        $subcategory = $_POST['subcategory'];
        $image = $_FILES['Image']['name'];
        echo $image;
       
        if (!$_FILES['Image']['name'] == "") {

            $existing_image = $_POST['existing_image'];

          


            $target_file = "../uploads/subcategory/".$existing_image;
            unlink($target_file);
            $image = $_FILES['Image']['name'];

            $target_dir = "../uploads/subcategory/";
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
                echo $image;
        
                $update_subcategory_query = "UPDATE subcategory SET CName='$category', SName='$subcategory', Image='$image'  WHERE id='$id'";

                $update_subcategory_result = $connection->query($update_subcategory_query);
                if ($update_subcategory_result) {
                    $_SESSION['status'] = "Subcategory Updated Successfully";
                    header("Location: ../admin.php");
                    exit;
                } else {
                    $_SESSION['status'] = $connection->error;
                }
            }
        } else {
            $image = $_POST['existing_image'];
            $update_subcategory_query = "UPDATE subcategory SET CName='$category', SName='$subcategory', Image='$image'  WHERE id='$id'";

            $update_subcategory_result = $connection->query($update_subcategory_query);
            if ($update_subcategory_result) {
                $_SESSION['status'] = "Subcategory Updated Successfully";
                header("Location: ../admin.php");
                exit;
            } else {
                $_SESSION['status'] = $connection->error;
            }
        }



        header("Location: ../admin.php", true,  301);
    }


    ?>