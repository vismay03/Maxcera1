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
</head>

<body>
  <!-- NAVBAR -->
  <?php
  include('comp/header.php');
  require('database/connection.php');

  $category = $_GET['category'];

  ?>

  <!-- TITLE -->

  <div class="title text-white flex flex-col sm:flex-row flex-wrap py-20 items-center justify-around">

    <!-- CATEGORY -->
    <section class="category relative">
      <h2 class="uppercase text-4xl text-center pb-16 font-bold"><?php echo $category; ?></h2>
      <img src="images/commod.png" width="200" height="300" alt="" />
    </section>

    <!-- TABS -->

    <div class="mt-16 tabs-container md:mt-16 sm:mt-0">
      <input type="checkbox" class="opacity-0 absolute mb-8" name="accordian-btn" id="btn" />

      <label for="btn" class="block cursor-pointer sm:hidden text-2xl  uppercase py-2 px-5"><?php echo $category; ?></label>
      <!-- SUB CATEGORY -->
      <nav class="tabs flex overflow-hidden mt-5 sm:flex-row">

        <?php
        $sql_get_subcategory_query = "SELECT * FROM subcategory WHERE CName='$category'";
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

      </nav>



    </div>

  </div>

  <div id="panels" class="w-full">

    <!-- PANEL -->
    <?php
    $sql_get_subcategory_query = "SELECT * FROM subcategory WHERE CName='$category'";
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
                      if ($rows['Subcategory'] == $subcategory['SName']) {
                  ?>

                        <div class="product-box mt-6 sm:mt-0">
                          <a class="relative rounded-t product-link">
                            <img alt="" class="object-contain rounded-t object-center h-64 hover:scale-110" src="uploads/<?= $rows['Image'] ?>">
                          </a>
                          <div class="product-text py-2 pl-2">
                            <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: <?= $rows['Name'] ?></span></h3>
                            <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: <?= $rows['Model'] ?></span></h2>
                            <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: <?= $rows['Size'] ?></span></p>
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
    <!-- PANEL 2 one piece -->

    <!-- PANEL 3 -->


    <!-- PANEL 4 -->


  </div>

  <!-- FOOTER -->

  <?php
  include('comp/footer.php');
  ?>

  <!-- TABS -->

  <script src="js/tabs.js">
  </script>


</body>

</html>