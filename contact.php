<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <style>
    .contact .container>div {
      border-radius: 50px;
      background: linear-gradient(145deg, #1e1a1a, #191616);
      box-shadow: 20px 20px 23px #181414,
        -20px -20px 23px #201c1c;
    }

    .contact .add {
      background-color: transparent;
    }

    .contact input,
    .contact textarea {
      border-radius: 0;
      border: none;
      background: transparent;
      border-bottom: 1px solid #f4f4f4;
    }

    .contact button {
      background-color: #9e2c2c;
    }

    .contact .mail {
      color: #9e2c2c;
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <?php
  include('comp/header.php');
  ?>

  <section class="text-gray-700 body-font contact  relative py-20">
    <div class="container py-24 mx-auto flex justify-around  sm:flex-no-wrap flex-wrap">

      <div class="lg:w-1/3 md:w-1/2 bg-white px-10 flex flex-col w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-100 text-2xl text-center  mb-8 font-bold title-font">Get In Touch</h2>
        <p class="leading-relaxed mb-5 text-gray-300">Don't hesitate, feel free to contact us through our contact  form  </p>
        <div class="relative mb-6">

          <input type="text" id="name" name="name" placeholder="Name" class="w-full placeholder-gray-500 text-xs bg-white  border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-6">

          <input type="email" id="email" name="email" placeholder="Email" class="w-full placeholder-gray-500 text-xs  bg-white  border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-6">

          <input type="tel" id="phone" name="phone" placeholder="Phone" class="w-full placeholder-gray-500 text-xs  bg-white  border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-6">

          <textarea id="message" name="message" placeholder="Message" class="w-full placeholder-gray-500 text-x bg-white  border border-gray-300 focus:border-indigo-500 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 uppercase focus:outline-none hover:bg-indigo-600 rounded shadow-md  text-lg">Send Message</button>
        <p class="text-xs text-gray-300 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
      <div class=" bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-center justify-start relative">
        <div class="bg-white relative flex flex-wrap py-6 add">
          <div class="lg:w-1/2 px-6 ">
            <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm">ADDRESS</h2>
            <p class="leading-relaxed text-gray-400">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>

            <h2 class="title-font mt-4 font-medium text-gray-200 tracking-widest text-sm">EMAIL</h2>
            <a class="text-indigo-500 leading-relaxed mail">example@email.com</a>
            <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm mt-4">PHONE</h2>
            <p class="leading-relaxed text-gray-400">123-456-7890</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- FOOTER -->

  <?php
  include('comp/footer.php');
  ?>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/activeClass.js"></script>

</body>

</html>