<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/product.css">

</head>

<body>
  <!-- NAVBAR -->
  <?php
  include('comp/header.php');
  ?>

  <!-- TITLE -->

  <div class="title text-white flex justify-around">
    <section class="category">
      <h2>COMMODES</h2>
      <img src="images/commod.png" width="200" height="300" alt="" />
    </section>
  
      <div class="">
        <nav class="tabs flex flex-col sm:flex-row">
          <button data-target="panel-1" class="tab active text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
          double color one piece
          </button><button data-target="panel-2" class="tab ext-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
            Map and Street View
          </button><button data-target="panel-3" class="tab text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
            Other info
          </button>
        </nav>
      </div>

     
    
   
  </div>

  <div id="panels" class="w-full">
        <div class="panel-1 tab-content active py-5">
          <section class="category">
            <h2 class="uppercase text-3xl text-gray-300 text-center py-16" >double color one piece</h2>

<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="w-40 h-64 bg-red-100 mx-auto">
        <a class="block relative overflow-hidden bg-red-100">
          <img alt="ecommerce" class="object-cover object-cente r block w-40 h-48" src="images/commod.png">
          
        </a>
        <div class="">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
          <p class="mt-1">$16.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
          <p class="mt-1">$21.15</p>
        </div>
      </div>
     
    </div>
  </div>
</section>
GitHub
         
          </section>
        </div>
        <div class="panel-2 tab-content py-5">
          Map here
        </div>
        <div class="panel-3 tab-content py-5">
          other info
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