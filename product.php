<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/header.css"> -->
  <link rel="preload" as="style" href="css/footer.css" onload="this.rel='stylesheet'" />
  <link rel="preload" as="style" href="css/product.css" onload="this.rel='stylesheet'" />
  <link rel="preload" as="style" href="css/header.css" onload="this.rel='stylesheet'" />
</head>

<body>
  <!-- NAVBAR -->
  <?php
  include('comp/header.php');
  ?>

  <!-- TITLE -->

  <div class="title text-white flex flex-col sm:flex-row flex-wrap py-20 items-center justify-around">

    <!-- CATEGORY -->
    <section class="category relative">
      <h2 class="uppercase text-4xl text-center pb-16 font-bold">COMMODES</h2>
      <img src="images/commod.png" width="200" height="300" alt="" />
    </section>

    <!-- TABS -->

    <div class="mt-16 tabs-container md:mt-16 sm:mt-0">
      <input type="checkbox" class="opacity-0 absolute mb-8" name="accordian-btn" id="btn" />

      <label for="btn" class="block cursor-pointer sm:hidden text-2xl  uppercase py-2 px-5">Commodes</label>

      <nav class="tabs flex overflow-hidden mt-5 flex-col sm:flex-row">
        <button data-target="panel-1" class="tab active uppercase py-4 px-6 block focus:outline-none text-white font-medium">
          double color one piece
        </button><button data-target="panel-2" class="tab uppercase ext-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
          one piece
        </button><button data-target="panel-3" class="tab uppercase text-white py-4 px-6 block hover:text-blue-500 focus:outline-none">
          wall hung
        </button>
        <button data-target="panel-4" class="tab uppercase text-white py-4 px-6 block hover:text-blue-500 focus:outline-none">
          water closest
        </button>
      </nav>



    </div>

  </div>

  <div id="panels" class="w-full">

    <!-- PANEL 1 -->

    <div class="panel-1 active tab-content py-5">
      <section class="category">

        <section class="text-gray-700 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-4/5 mx-auto justify-around -m-4 ">

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>

            </div>
        </section>


      </section>
    </div>

    <!-- PANEL 2 -->

    <div class="panel-2 tab-content py-5">
      <section class="category">

        <section class="text-gray-700 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-4/5 mx-auto justify-around -m-4 ">

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>


            </div>
        </section>


      </section>
    </div>

    <!-- PANEL 3 -->

    <div class="panel-3 tab-content py-5">
      <section class="category">

        <section class="text-gray-700 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-4/5 mx-auto justify-around -m-4 ">

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>
              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>



            </div>
        </section>


      </section>
    </div>

    <!-- PANEL 4 -->

    <div class="panel-4 tab-content py-5">
      <section class="category">

        <section class="text-gray-700 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-4/5 mx-auto justify-around -m-4 ">

              <div class="product-box mt-6 sm:mt-0">
                <a class="relative rounded-t product-link">
                  <img alt="ecommerce" class="object-contain rounded-t object-center h-64 hover:scale-110" src="images/commod.png">
                </a>
                <div class="product-text py-2 pl-2">
                  <h3 class="text-sm tracking-widest font-medium title-font mb-1"> <span class="font-semibold">Name: NAME</span></h3>
                  <h2 class="title-font text-sm font-medium"> <span class="font-semibold">Model: 401</span></h2>
                  <p class="mt-1 text-sm font-medium"> <span class="font-semibold">Size: 200 x 300</span></p>
                </div>
              </div>




            </div>
        </section>


      </section>
    </div>
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