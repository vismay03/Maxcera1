<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="preload" as="style" href="css/footer.css" onload="this.rel='stylesheet'" />
  <link rel="preload" as="style" href="css/product.css" onload="this.rel='stylesheet'" />
  <link rel="preload" as="style" href="css/header.css" onload="this.rel='stylesheet'" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR -->
  <?php
  require('database/connection.php');
  include('comp/header.php');


  $cat = $_GET['category'];

  ?>

  <!-- TITLE -->

  <div class="title text-white flex flex-col sm:flex-row flex-wrap py-20 items-center justify-around">

    <!-- CATEGORY -->
    <section class="category flex flex-col">
      <h2 class="uppercase text-4xl text-center mb-16   font-bold"><?php echo $cat; ?></h2>

      <?php
      $sql_get_page_img_query = "SELECT pageImg, description FROM category WHERE CName='$cat'";
      $sql_get_page_img_query_result = $connection->query($sql_get_page_img_query);
      if ($sql_get_page_img_query_result->num_rows > 0) {

        while ($category = $sql_get_page_img_query_result->fetch_assoc()) {
      ?>
          <img src="uploads/category/<?php echo $category['pageImg'] ?>" class="self-center" style="width:270px;height:300px;" alt="" />

    </section>

    <div class="flex flex-col items-baseline">

      <!-- DESCRIPTION -->

      <section class="text-lg desc text-gray-200 text-center self-center mt-10">
        <?php echo $category['description']; ?>
      </section>
  <?php
        }
      }
  ?>
  <!-- TABS -->
  <div class="mt-10 tabs-container md:mt-16 sm:mt-0 self-center">
    <input type="checkbox" class="opacity-0 absolute mb-8" name="accordian-btn" id="btn" />
    <label for="btn" class="block cursor-pointer sm:hidden text-2xl  uppercase py-2 px-5"><?php echo $cat; ?></label>
    <!-- SUB CATEGORY -->
    <div class="tabs flex flex-row  overflow-hidden mt-5 sm:flex-row">

      <?php
      $sql_get_subcategory_query = "SELECT * FROM subcategory WHERE CName='$cat'";
      $sql_get_subcategory_query_result = $connection->query($sql_get_subcategory_query);
      if ($sql_get_subcategory_query_result->num_rows > 0) {

        while ($subcategory = $sql_get_subcategory_query_result->fetch_assoc()) {


      ?>

          <button data-target="<?php echo str_replace(' ', '', $subcategory['SName']); ?>" class="tab uppercase py-4 px-6 block focus:outline-none text-white font-medium">
            <?php
            echo $subcategory['SName'];
            ?>
          </button>
      <?php

        }
      }

      ?>

    </div>



  </div>
    </div>



  </div>

  <div id="panels" class="w-full">

    <!-- PANEL -->
    <?php
    $sql_get_subcategory_query = "SELECT * FROM subcategory WHERE CName='$cat'";
    $sql_get_subcategory_query_result = $connection->query($sql_get_subcategory_query);
    if ($sql_get_subcategory_query_result->num_rows > 0) {

      while ($subcategory = $sql_get_subcategory_query_result->fetch_assoc()) {
    ?>

        <div class="<?php echo str_replace(' ', '', $subcategory['SName']); ?> text-white tab-content py-5">

          <section class="category">

            <section class="text-gray-700 body-font">
              <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-4/5 mx-auto justify-around -m-4 ">
                  <?php
                  $sql_get_query = 'SELECT * FROM product';
                  $sql_get_query_result = $connection->query($sql_get_query);

                  if ($sql_get_query_result->num_rows > 0) {
                    while ($rows = $sql_get_query_result->fetch_assoc()) {
                      if ($subcategory['SName'] == $rows['Subcategory']) {
                  ?>

                        <div class="product-box mt-10" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                          <a class="relative rounded-t product-link">
                            <img alt="" class="object-cover rounded-t object-center h-64 hover:scale-110" src="uploads/product/<?php echo $rows['Image'] ?>">
                          </a>
                          <div class="product-text py-2 pl-2">
                            <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: <?php echo $rows['Name'] ?></span></h3>
                            <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: <?php echo $rows['Model'] ?></span></h2>
                            <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: <?php echo $rows['Size'] ?></span></p>
                          </div>
                        </div>
                  <?php
                      }
                    }
                  }

                  ?>




                </div>
            </section>


          </section>
        </div>
    <?php
      }
    }

    ?>


  </div>

  <!-- FOOTER -->

  <?php
  include('comp/footer.php');
  ?>

  <!-- TABS -->

  <script src="js/tabs.js">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>