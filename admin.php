<?php
require('database/connection.php');
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header('Location: login.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preload" as="style" href="css/admin.css" onload="this.rel='stylesheet'" />

</head>

<body>

    <!-- ADMIN PANEL TITLE -->

    <nav class="shadow text-center flex justify-center   py-5 text-4xl uppercase">
        <h2 class="mx-auto">Maxcera admin panel</h2>
        <a href="database/logout.php" class="self-center mr-1 text-lg">Logout</a>
    </nav>


    <div class="flex flex-col  sm:flex-row">
        <!-- ADMIN PANEL SIDE BAR -->
        <div class="sidebar md:flex shadow-lg  flex-col md:flex-row md:w-64 md:min-h-screen w-full">
            <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
                <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                    <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                    <a data-target="category-table" class="table active  block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Category</a>
                    <a data-target="subcategory-table" class="table block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Subcategory</a>
                    <a data-target="product-table" class="table block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Product</a>
                </nav>
            </div>
        </div>

        <div id="tables" class="w-full flex justify-center">
            <!-- CATEGORY TABLE -->

            <div class="category-table active table-content">
                <!-- CATEGORY ADD BUTTON -->
                <h3 class="text-center text-3xl font-medium text-gray-900 w-full py-8">CATEGORY TABLE</h3>
                <button id="categoryAddBtn" class="categoryAddBtn mb-5 px-3   bg-black text-white  text-center text-xl cursor-pointer">add +</button>

                <!-- CATEGORY ADD FORM -->
                <div id="categoryAddForm" class="categoryAddForm absolute flex justify-center  top-0 left-0">
                    <div class="bg-gray-300 px-12 py-8 absolute top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                        <form action="database/addCategory.php" method="post" enctype="multipart/form-data">

                            <!-- CLOSE CATEGORY EDIT FORM BUTTON -->
                            <section id="closeAddCategoryBtn" class="closeAddCategoryBtn text-right w-full text-4xl cursor-pointer">&times;</section>

                            <label class="">
                                <input type="text" name="category" value='' class="w-full form-input border-2 border-gray-200 pl-2  mt-3  " placeholder="Category">
                            </label>

                            <label class=" mt-3">
                                <input type="file" name="image" value='' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Image">
                            </label>

                            <label class="text-center mt-3">
                                <input type="submit" name="addCategory" class="w-full bg-gray-700 text-white round mt-3 py-1" value="Add">
                            </label>
                        </form>
                    </div>
                </div>

                <table class="table-auto text-xs sm:text-lg">
                    <thead>

                        <th>Category</th>
                        <th>Image</th>

                    </thead>
                    <?php
                    $sql_get_category_query = 'SELECT * FROM category';
                    $sql_get_category_query_result = $connection->query($sql_get_category_query);

                    if ($sql_get_category_query_result->num_rows > 0) {

                        while ($category = $sql_get_category_query_result->fetch_assoc()) {


                    ?>

                            <!-- SUBCATEGORY FROM DATABASE -->
                            <tbody>

                                <td><?php echo $category['CName']  ?></td>
                                <td><?php echo $category['Image']  ?></td>

                                <td class="flex border-none">
                                    <!--CATEGORY EDIT BUTTON  -->
                                    <a href="#categoryEditForm<?php echo $category['CName']; ?>">
                                        <img id="categoryEditBtn" class="categoryEditBtn mr-2 cursor-pointer" src="images/icons/Edit.svg" />
                                    </a>
                                    <!-- CATEGORY DELETE BUTTON  -->
                                    <a href="#categoryDeleteForm<?php echo $category['CName']; ?>">
                                        <img id="categoryDeleteBtn" class="categoryDeleteBtn mr-2 cursor-pointer" src="images/icons/Vector.svg" />
                                    </a>

                                </td>


                                <!-- CATEGORY EDIT MODEL FORM -->

                                <div id="categoryEditForm<?php echo $subcategory['id']; ?>" class="categoryEditForm absolute flex justify-center   top-0 left-0">
                                    <div class="bg-gray-300 px-12 py-8 absolute top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                                        <form action="database/updateCategory.php" method="post" enctype="multipart/form-data">

                                            <!-- CLOSE CATEGORY EDIT FORM BUTTON -->
                                            <section class="closeCategoryEditFormBtn text-right w-full text-4xl cursor-pointer">&times;</section>


                                            <label class="">
                                                <input type="text" name="Category" value='<?php
                                                                                            echo $category['CName']; ?>' class="w-full form-input border-2 border-gray-200 pl-2  mt-3  " placeholder="Name">
                                            </label>

                                            <input type="text" name="id" value="<?php echo $category['CName']; ?>" hidden>

                                            <label class=" mt-3">
                                                <input type="file" name="Image" value='<?php echo $category['Image']; ?>' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Image">
                                            </label>
                                            <label class="text-center mt-3">
                                                <input type="submit" name="updateCategory" class="w-full bg-gray-700 text-white round mt-3 py-1" value="Update">
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <!-- CATEGORY DELETE CONFIRMATION -->

                                <div id="categoryDeleteForm<?php echo $category['CName']; ?>" class="categoryDeleteForm absolute    top-0 left-0">
                                    <div class="bg-gray-300 px-3 p-3 absolute w-64  top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                                        <h3 class="text-3xl text-center">Are You Sure?</h3>
                                        <section class="flex justify-between w-full mt-8">
                                            <form action="database/Delete.php" method="post">
                                                <input value="<?php
                                                                echo $category['CName']; ?>" type="text" name="id" hidden />
                                                <button class="closeCategoryDeleteFormBtn text-center px-3   text-2xl cursor-pointer">No</button>
                                                <input type="submit" class="categoryDeleteSubmitBtn  px-3   bg-black text-white  text-center text-2xl cursor-pointer" value="Delete" name="Delete">
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </tbody>


                    <?php

                        }
                    }



                    ?>

                </table>

            </div>

            <!-- SUBCATEGORY TABLE -->

            <div class="subcategory-table table-content">

                <!-- SUBCATEGORY TITLE -->
                <h3 class="text-center text-3xl font-medium text-gray-900 w-full py-8">SUBCATEGORY TABLE</h3>

                <!-- SUBCATEGORY ADD BUTTON -->
                <button id="subcategoryAddBtn" class="subcategoryAddBtn mb-5 px-3   bg-black text-white  text-center text-xl cursor-pointer">add +</button>

                <!-- SUBCATEGORY ADD FORM -->

                <div id="subcategoryAddForm" class="subcategoryAddForm absolute flex justify-center  top-0 left-0">
                    <div class="bg-gray-300 px-12 py-8 absolute top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                        <form action="database/addSubcategory.php" method="post" enctype="multipart/form-data">

                            <!-- CLOSE SUBCATEGORY EDIT FORM BUTTON -->
                            <section id="closeAddSubcategoryBtn" class="closeAddSubcategoryBtn text-right w-full text-4xl cursor-pointer">&times;</section>
                            <label class="block">
                                <select name="category" class="w-full form-select border-2 border-gray-200 pl-2 py-1 block mt-1">
                                    <?php
                                    $sql_get_category_query = 'SELECT * FROM category';
                                    $sql_get_category_query_result = $connection->query($sql_get_category_query);

                                    if ($sql_get_category_query_result->num_rows > 0) {

                                        while ($category = $sql_get_category_query_result->fetch_assoc()) {

                                    ?>
                                            <option><?php echo $category['CName'];  ?></option>

                                    <?php
                                        }
                                    }
                                    ?>

                                </select>
                            </label>

                            <label class="">
                                <input type="text" name="subcategory" value='' class="w-full form-input border-2 border-gray-200 pl-2  mt-3  " placeholder="Subcategory">
                            </label>



                            <label class=" mt-3">
                                <input type="file" name="image" value='' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Image">
                            </label>
                            <label class="text-center mt-3">
                                <input type="submit" name="addSubcategory" class="w-full bg-gray-700 text-white round mt-3 py-1" value="Add">
                            </label>
                        </form>
                    </div>
                </div>

                <table class="table-auto text-xs sm:text-lg">
                    <thead>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Image</th>

                    </thead>
                    <?php
                    $sql_get_subcategory_query = 'SELECT * FROM subcategory';
                    $sql_get_subcategory_query_result = $connection->query($sql_get_subcategory_query);

                    if ($sql_get_subcategory_query_result->num_rows > 0) {

                        while ($subcategory = $sql_get_subcategory_query_result->fetch_assoc()) {


                    ?>

                            <!-- SUBCATEGORY FROM DATABASE -->
                            <tbody>
                                <td><?php echo $subcategory['id'] ?></td>
                                <td><?php echo $subcategory['CName']  ?></td>
                                <td><?php echo $subcategory['SName']  ?></td>
                                <td><?php echo $subcategory['Image']  ?></td>

                                <td class="flex border-none">
                                    <!--SUBCATEGORY EDIT BUTTON  -->
                                    <a href="#subcategoryEditForm<?php echo $subcategory['id']; ?>">
                                        <img id="subcategoryEditBtn" class="subcategoryEditBtn mr-2 cursor-pointer" src="images/icons/Edit.svg" />
                                    </a>
                                    <!-- SUBCATEGORY DELETE BUTTON  -->
                                    <a href="#subcategoryDeleteForm<?php echo $subcategory['id']; ?>">
                                        <img id="subcategoryDeleteBtn" class="subcategoryDeleteBtn mr-2 cursor-pointer" src="images/icons/Vector.svg" />
                                    </a>

                                </td>


                                <!-- SUBCATEGORY EDIT MODEL FORM -->

                                <div id="subcategoryEditForm<?php echo $subcategory['id']; ?>" class="subcategoryEditForm absolute flex justify-center   top-0 left-0">
                                    <div class="bg-gray-300 px-12 py-8 absolute top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                                        <form action="database/updateSubcategory.php" method="post" enctype="multipart/form-data">

                                            <!-- CLOSE SUBCATEGORY EDIT FORM BUTTON -->
                                            <section class="closeSubcategoryEditFormBtn text-right w-full text-4xl cursor-pointer">&times;</section>
                                            <label class="block">
                                                <select name="category" class="w-full form-select border-2 border-gray-200 pl-2 py-1 block mt-1">

                                                    <option>
                                                        <?php echo $subcategory['CName'];  ?>
                                                    </option>

                                                    <?php
                                                    $sql_get_category_query = 'SELECT * FROM category';
                                                    $sql_get_category_query_result = $connection->query($sql_get_category_query);

                                                    if ($sql_get_category_query_result->num_rows > 0) {

                                                        while ($category = $sql_get_category_query_result->fetch_assoc()) {
                                                            if ($subcategory['CName'] !== $category['CName']) {
                                                    ?>

                                                                <option><?php echo $category['CName'];  ?></option>

                                                    <?php
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </label>
                                            <input value="<?php
                                                            echo $subcategory['id']; ?>" type="text" name="id" hidden />
                                            <label class="">
                                                <input type="text" name="subcategory" value='<?php
                                                                                                echo $subcategory['SName']; ?>' class="w-full form-input border-2 border-gray-200 pl-2  mt-3  " placeholder="Name">
                                            </label>


                                            <label class=" mt-3">
                                                <input type="file" name="Image" value='<?php echo $subcategory['Image']; ?>' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Image">
                                            </label>
                                            <label class="text-center mt-3">
                                                <input type="submit" name="updateSubcategory" class="w-full bg-gray-700 text-white round mt-3 py-1" value="Update">
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <!-- SUBCATEGORY DELETE CONFIRMATION -->

                                <div id="subcategoryDeleteForm<?php echo $subcategory['id']; ?>" class="subcategoryDeleteForm absolute    top-0 left-0">
                                    <div class="bg-gray-300 px-3 p-3 absolute w-64  top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                                        <h3 class="text-3xl text-center">Are You Sure?</h3>
                                        <section class="flex justify-between w-full mt-8">
                                            <form action="database/deleteSubcategory.php" method="post">
                                                <input value="<?php
                                                                echo $subcategory['id']; ?>" type="text" name="id" hidden />
                                                <button class="closeSubcategoryDeleteFormBtn text-center px-3   text-2xl cursor-pointer">No</button>
                                                <input type="submit" class="subcategoryDeleteSubmitBtn  px-3   bg-black text-white  text-center text-2xl cursor-pointer" value="Delete" name="Delete">
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </tbody>


                    <?php

                        }
                    }



                    ?>

                </table>

            </div>

            <!-- PRODUCT TABLE -->
            <div class="product-table table-content">

                <!-- PRODUCT TABLE TITLE -->
                <h3 class="text-center text-3xl font-medium text-gray-900 w-full py-8">PRODUCT TABLE</h3>

                <!-- PRODUCT ADD BUTTON -->
                <button id="productAddBtn" class="productAddBtn mb-5 px-3 bg-black text-white  text-center text-xl cursor-pointer">add +</button>

                <!-- PRODUCT ADD FORM -->

                <div id="productAddForm" class="productAddForm absolute flex justify-center  top-0 left-0">
                    <div class="bg-gray-300 px-12 py-8 absolute top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                        <form action="database/Add.php" method="post" enctype="multipart/form-data">

                            <!-- CLOSE PRODUCT EDIT FORM BUTTON -->
                            <section id="closeAddFormBtn" class="closeAddFormBtn text-right w-full text-4xl cursor-pointer">&times;</section>
                            <label class="block">
                                <select name="Subcategory" class="w-full form-select border-2 border-gray-200 pl-2 py-1 block mt-1">

                                    <?php
                                    $sql_get_subcategory_query = 'SELECT SName FROM subcategory';
                                    $sql_get_subcategory_query_result = $connection->query($sql_get_subcategory_query);

                                    if ($sql_get_subcategory_query_result->num_rows > 0) {

                                        while ($subcategory = $sql_get_subcategory_query_result->fetch_assoc()) {


                                    ?>
                                            <option><?php echo $subcategory['SName']  ?></option>
                                    <?php

                                        }
                                    }

                                    ?>

                                </select>
                            </label>

                            <label class="">
                                <input type="text" name="Name" value='' class="w-full form-input border-2 border-gray-200 pl-2  mt-3  " placeholder="Name">
                            </label>

                            <label class="mt-3">
                                <input type="text" name="Model" value='' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Model">
                            </label>
                            <label class="mt-3">
                                <input type="text" name="Size" value="" class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block " placeholder="Size">
                            </label>
                            <label class=" mt-3">
                                <input type="file" name="Image" value='' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Image">
                            </label>
                            <label class="text-center mt-3">
                                <input type="submit" name="Add" class="w-full bg-gray-700 text-white round mt-3 py-1" value="Add">
                            </label>
                        </form>
                    </div>
                </div>

                <table class="table-auto text-xs sm:text-lg">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Size</th>
                        <th>Image</th>
                        <th>Subcategory</th>
                    </thead>
                    <?php
                    $sql_get_query = 'SELECT * FROM product';
                    $sql_get_query_result = $connection->query($sql_get_query);

                    if ($sql_get_query_result->num_rows > 0) {

                        while ($product = $sql_get_query_result->fetch_assoc()) {


                    ?>

                            <!-- PRODUCT FROM DATABASE -->
                            <tbody>
                                <td><?php echo $product['id'] ?></td>
                                <td><?php echo $product['Name']  ?></td>
                                <td><?php echo $product['Model']  ?></td>
                                <td><?php echo $product['Size']  ?></td>
                                <td><?php echo $product['Image']  ?></td>
                                <td><?php echo $product['Subcategory']  ?></td>
                                <td class="flex border-none">
                                    <!--PRODUCT EDIT BUTTON  -->
                                    <a href="#productEditForm<?php echo $product['id']; ?>">
                                        <img id="productEditBtn" class="productEditBtn mr-2 cursor-pointer" src="images/icons/Edit.svg" />
                                    </a>
                                    <!-- PRODUCT DELETE BUTTON  -->
                                    <a href="#productDeleteForm<?php echo $product['id']; ?>">
                                        <img id="productDeleteBtn" class="productDeleteBtn mr-2 cursor-pointer" src="images/icons/Vector.svg" />
                                    </a>

                                </td>


                                <!-- PRODUCT EDIT MODEL FORM -->

                                <div id="productEditForm<?php echo $product['id']; ?>" class="productEditForm absolute flex justify-center   top-0 left-0">
                                    <div class="bg-gray-300 px-12 py-8 absolute top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                                        <form action="database/update.php" method="post" enctype="multipart/form-data">

                                            <!-- CLOSE EDIT FORM BUTTON -->
                                            <section class="closeEditForm text-right w-full text-4xl cursor-pointer">&times;</section>
                                            <label class="block">
                                                <select name="Subcategory" class="w-full form-select border-2 border-gray-200 pl-2 py-1 block mt-1">

                                                    <option><?= $product['Subcategory']  ?></option>

                                                    <?php
                                                    $sql_get_subcategory_query = 'SELECT SName FROM subcategory';
                                                    $sql_get_subcategory_query_result = $connection->query($sql_get_subcategory_query);

                                                    if ($sql_get_subcategory_query_result->num_rows > 0) {

                                                        while ($subcategory = $sql_get_subcategory_query_result->fetch_assoc()) {
                                                            if ($product['Subcategory'] !== $subcategory['SName']) {


                                                    ?>
                                                                <option><?php echo $subcategory['SName']  ?></option>
                                                    <?php
                                                            }
                                                        }
                                                    }

                                                    ?>
                                                </select>
                                            </label>
                                            <input value="<?php
                                                            echo $product['id']; ?>" type="text" name="id" hidden />
                                            <label class="">
                                                <input type="text" name="Name" value='<?php
                                                                                        echo $product['Name']; ?>' class="w-full form-input border-2 border-gray-200 pl-2  mt-3  " placeholder="Name">
                                            </label>

                                            <label class="mt-3">
                                                <input type="text" name="Model" value='<?php echo $product['Model']; ?>' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Model">
                                            </label>
                                            <label class="mt-3">
                                                <input type="text" name="Size" value="<?php
                                                                                        echo $product['Size']; ?>" class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block " placeholder="Size">
                                            </label>
                                            <label class=" mt-3">
                                                <input type="file" name="Image" value='<?php echo $product['Image']; ?>' class="w-full form-input border-2 border-gray-200 pl-2  mt-3 block" placeholder="Image">
                                            </label>
                                            <label class="text-center mt-3">
                                                <input type="submit" name="Update" class="w-full bg-gray-700 text-white round mt-3 py-1" value="Update">
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <!-- PRODUCT DELETE CONFIRMATION -->

                                <div id="productDeleteForm<?php echo $product['id']; ?>" class="productDeleteForm absolute    top-0 left-0">
                                    <div class="bg-gray-300 px-3 p-3 absolute w-64  top-2/4 left-2/4 transform -translate-y-2/4 -translate-x-2/4">
                                        <h3 class="text-3xl text-center">Are You Sure?</h3>
                                        <section class="flex justify-between w-full mt-8">
                                            <form action="database/Delete.php" method="post">
                                                <input value="<?php
                                                                echo $product['id']; ?>" type="text" name="id" hidden />
                                                <button class="closeDeleteFormBtn text-center px-3   text-2xl cursor-pointer">No</button>
                                                <input type="submit" class="productDeleteSubmitBtn  px-3   bg-black text-white  text-center text-2xl cursor-pointer" value="Delete" name="Delete">
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </tbody>


                    <?php

                        }
                    }



                    ?>

                </table>


            </div>

        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- PRODUCT ADD, EDIT, DELETE -->
    <script src="js/editProductModel.js"></script>
    <script src="js/deleteProductModel.js"></script>
    <script src="js/addProductModel.js"></script>

    <!-- SUBCATEGORY ADD, EDIT, DELETE -->
    <script src="js/addSubcategoryModel.js"></script>
    <script src="js/editSubcategoryModel.js"></script>
    <script src="js/deleteSubcategoryModel.js"></script>

    <!-- CATEGORY ADD, EDIT, DELETE -->
    <script src="js/addCategoryModel.js"></script>
    <script src="js/editCategoryModel.js"></script>
    <script src="js/adminPanelTabs.js"></script>


</body>

</html>