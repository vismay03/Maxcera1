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
      background-color: #4E4A4A;

    }

    .contact:hover {
      opacity: .8;
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
        <p class="leading-relaxed mb-5 text-gray-300">Don't hesitate, feel free to contact us through our contact form </p>
        <form action="database/sendMail.php" method="post">
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
          <button type="submit" class="w-full text-white border-0 py-2 px-6 uppercase focus:outline-none mt-2  rounded shadow-md  text-lg">Send Message</button>
        </form>

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