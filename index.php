<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>

<body>
    <!-- NAVBAR -->
    <?php
    include('comp/header.php');
    ?>

    <section class="landing  sm:mb-32">

    </section>

    <!-- ABOUT -->

    <div id="about" class="flex justify-center about py-16 sm:py-32">
        <img src="images/aboutImg.png" class="about-img" alt="" />
        <div class="about-content self-center text-white">
            <h2 class="text-4xl uppercase text-">About us</h2>
            <p class="text-md mt-8">Maxcera sanitaryware is a Proprietership firm manufacturing an excellent quality range of Bathroom Sanitaryware like Water Closets, Designer Basins, Toilet Pans and Seat Covers etc </p>
            <p class="text-md mt-3">These products are sourced from reliable market vendors and can be availed by our clients at resonable prices.
            </p>
            <p class="text-md mt-3">Under the guidences of our mentor "Mr. Mitesh, Who holds profound knowledge and experience in this domain, we have been able to aptly satisfy our clients.</p>
        </div>
    </div>

    <!-- COLLECTION -->

    <div class="flex flex-col justify-center mx-auto collection py-16 sm:py-32">
        <h2 class="text-4xl collection-title uppercase text-center"> Our COLLECTION</h2>
        <div class=" flex flex-wrap justify-around">
            <section class="flex flex-col w-auto justify-center mt-16">
                <img src="images/aboutImg.png" class="self-center" loading="lazy" alt="" />
                <h3 class="uppercase text-white text-center text-2xl mt-8">COmmodes</h3>
            </section>
            <section class="flex flex-col w-auto justify-center mt-16">
                <img src="images/aboutImg.png" class="self-center" loading="lazy" alt="" />
                <h3 class="uppercase text-white text-center text-2xl mt-5">wash basin</h3>
            </section>
            <section class="flex flex-col w-auto justify-center mt-16">
                <img src="images/aboutImg.png" class="self-center" loading="lazy" alt="" />
                <h3 class="uppercase text-white text-center text-2xl mt-5">URINAL OR OTHER</h3>
            </section>
        </div>
    </div>

    <!-- PRODUCTS -->

    <div class="flex flex-col justify-center mx-auto product py-16 sm:py-32">
        <h2 class="text-4xl product-title uppercase text-center">Premium Products</h2>
        <div class=" flex flex-col md:flex-row justify-around">
            <section class="flex flex-col w-auto justify-center mt-16">
                <img src="images/productImg.png" loading="lazy" class="self-center" alt="" />

            </section>
            <section class="flex flex-col w-auto justify-center mt-16">
                <img src="images/productImg.png" loading="lazy" class="self-center" alt="" />

            </section>
            <section class="flex flex-col w-auto justify-center mt-16">
                <img src="images/productImg.png" loading="lazy" class="self-center" alt="" />
            </section>
        </div>
    </div>

    <!-- COMPANY FACTS -->

    <div class="company-facts flex flex-col sm:flex-row justify-around">
        <section class="facts-content flex flex-wrap h-full justify-center w-full">
            <div class="sm:w-1/2 w-full self-center flex justify-center text-center">


                <h2 class="facts-title py-8 self-center py-4 text-4xl text-center">
                    Some of Our Company’s Real Facts</h2>

            </div>
            <div class="sm:w-1/2 w-full self-center">
                <div class="flex justify-around align-center">
                    <section class="flex flex-col w-28 text-center">
                        <img src="images/icons/1.png" class="w-24 h-24 self-center" loading="lazy" alt="" />
                        <h2>215+</h2>
                        <h2>Happy Clients</h2>
                    </section>
                    <section class="flex flex-col w-28 text-center">
                        <img src="images/icons/2.png" class="w-24 h-24 self-center" loading="lazy" alt="" />
                        <h2>215+</h2>
                        <h2>Happy Clients</h2>
                    </section>
                </div>
                <div class="flex justify-around mt-8">
                    <section class="flex flex-col w-28 text-center">
                        <img src="images/icons/3.png" class="w-32 h-24 self-center" loading="lazy" alt="" />
                        <h2>215+</h2>
                        <h2>Happy Clients</h2>
                    </section>
                    <section class="flex flex-col w-28 text-center">
                        <img src="images/icons/4.png" class="w-24 h-24 self-center" loading="lazy" alt="" />
                        <h2>215+</h2>
                        <h2>Happy Clients</h2>
                    </section>
                </div>
        </section>
    </div>

    <!-- ENQUIRY -->

    <div class="flex justify-around w-full flex-col sm:flex-row flex-wrap-reverse enquiry text-white py-6">
        <section class="text-center">
            <h2>Have Questions? Call Us: +91 90161 61636</h2>
            <p>Or mail us on info@maxcerasanitarywear.com</p>
        </section>
        <a class="py-2 px-4 hover:text-white self-center mt-5 sm:mt-0" href="contact.php">Send An Enquiry</a>
    </div>

    <!-- FOOTER -->
   
    <?php
    include('comp/footer.php');
    ?>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
</body>

</html>