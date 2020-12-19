<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);

require('database/connection.php');

$sql_get_category_query = 'SELECT * FROM category';
$sql_get_category_query_result = $connection->query($sql_get_category_query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsiveIndex.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <link rel="stylesheet" href="css/Hover-Buttons-master/css/hoverbuttons.css">
</head>

<body>
    <div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;" class="text-white">Loading..</div>



    <!-- NAVBAR -->
    <?php
    include('comp/header.php');
    ?>

    <section id="landingImg-slider" class="landing splide sm:mb-32" data-aos="zoom-in">
        <section class="flex justify-around   splide__track ">
            <div class="splide__list">

                <img src=" images/landingImg.png" class="splide__slide w-full wel-img" alt="">

                <img src=" images/landingImg.png" class="splide__slide w-full wel-img" alt="">

            </div>
        </section>
    </section>

    <!-- ABOUT -->

    <div id=" about" class="flex justify-center about py-16 sm:py-20">
        <img src="images/aboutImg1.png" class="about-img" loading="lazy" alt="" data-aos="fade-right" />
        <div class="about-content self-center text-white" data-aos="fade-left">
            <h2 class="text-4xl uppercase " data-aos="zoom-in-out" data-aos-delay="500">About us</h2>
            <p class="text-md mt-8">Maxcera sanitaryware is a Proprietorship firm manufacturing an excellent quality range of Bathroom Sanitaryware like Water Closets, Designer Basins, Toilet Pans and Seat Covers etc </p>
            <p class="text-md mt-3">These products are sourced from reliable market vendors and can be availed by our clients at reasonable prices.
            </p>
            <p class="text-md mt-3">Under the guidances of our mentor "Mr. Mitesh, Who holds profound knowledge and experience in this domain, we have been able to aptly satisfy our clients.</p>
        </div>
    </div>

    <!-- COLLECTION -->

    <div class="flex flex-col  justify-center  mx-auto collection   py-16 sm:py-32">
        <h2 class="text-4xl collection-title uppercase text-center" data-aos="slide-title">Our COLLECTION</h2>
        <div id="card-slider" class="splide flex justify-center flex-wrap">
            <section class='splide__track py-10'>
                <div class="splide__list">


                    <?php

                    if ($sql_get_category_query_result->num_rows > 0) {
                        while ($rows = $sql_get_category_query_result->fetch_assoc()) {
                    ?>

                            <form action="products.php" method="get" class="splide__slide">

                                <input type="text" name="category" value="<?php echo $rows['CName'];  ?>" hidden>

                                <button type="submit" class="category-btn ml-20" value="">
                                    <div class="circle"></div>
                                    <img src='images/<?php echo $rows['Image']; ?>' class='self-center ml-20' loading='lazy' alt='' />
                                </button>
                                <h3 class='uppercase text-white  text-center text-2xl mt-8'> <?php echo $rows['CName'];  ?></h3>


                            </form>






                    <?php
                        }
                    }
                    ?>

                </div>

            </section>

        </div>

    </div>

    <!-- PRODUCTS -->

    <div class=" flex flex-col justify-center mx-auto product py-16 sm:py-32">
        <h2 class="text-4xl product-title uppercase text-center" data-aos="slide-title">Premium Products</h2>
        <div id="premium-slider" class="splide flex justify-center flex-wrap">
            <section class='splide__track py-10'>
                <div class="splide__list ">

                    <?php
                    $sql_get_category_query = 'SELECT * FROM premium';
                    $sql_get_category_query_result = $connection->query($sql_get_category_query);

                    if ($sql_get_category_query_result->num_rows > 0) {
                        while ($premium = $sql_get_category_query_result->fetch_assoc()) {
                    ?>

                            <div class="flex justify-center mt-16 splide__slide">
                                <img class="hbtn hb-border-off3 " src="uploads/premium/<?= $premium['Image'] ?>" loading="lazy" class="self-center" alt="" />

                            </div>
                            <div class="flex justify-center mt-16 mx-10  splide__slide">
                                <img class="hbtn hb-border-off3" src="uploads/premium/<?= $premium['Image'] ?>" loading="lazy" class="self-center" alt="" />

                            </div>
                            <div class="flex justify-center mt-16 splide__slide">
                                <img class="hbtn hb-border-off3" src="uploads/premium/<?= $premium['Image'] ?>" loading="lazy" class="self-center" alt="" />

                            </div>
                            <div class="flex justify-center mt-16 splide__slide">
                                <img class="hbtn hb-border-off3" src="uploads/premium/<?= $premium['Image'] ?>" loading="lazy" class="self-center" alt="" />

                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>
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
            <div class="sm:w-1/2 w-full self-center" data-aos="zoom-in">
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
        <a class="py-2 px-4 hover:text-white self-center mt-5 sm:mt-0 hbtn hb-fill-middle2-bg" href="contact.php">Send An Enquiry</a>
    </div>
    <!-- FOOTER -->

    <?php
    include('comp/footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js">
        $("#loading").ajaxStart(function() {
            $(this).show();
        });

        $("#loading").ajaxStop(function() {
            $(this).hide();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/ScrollAnim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#card-slider', {
                perPage: 3,
                rewind: true,
                gap: '20px',

                breakpoints: {
                    600: {
                        perPage: 1,
                    }
                }
            }).mount();
            new Splide('#premium-slider', {
                perPage: 3,
                rewind: true,
                gap: '20px',

                breakpoints: {
                    600: {
                        perPage: 1,
                    }
                }
            }).mount();
            var welImg = document.getElementsByClassName('wel-img');
            var activeImage;
            var activeClass = 'swing-in-top-fwd';
            for (let i = 0, len = welImg.length; i < len; i++) {
                var image = welImg[i];
            }
            new Splide('#landingImg-slider', {
                rewind: true,
                cover: true,
                autoplay: true,
                type: 'loop',
                gap: '20px',
                perPage: 1,

            }).mount().on('move', function() {
                if (activeImage !== image) {
                    activeImage.classList.remove('swing-in-top-fwd');
                    image.classList.add('swing-in-top-fwd');
                    splide.go(i);
                    activeImage = image;
                }
            }, image);


        });
    </script>
    <script script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $(document).ajaxStart(function() {
                $("#wait").css("display", "block");
            });
            $(document).ajaxComplete(function() {
                $("#wait").css("display", "none");
            });
            $("button").click(function() {
                $("#txt").load("index.php");
            });
        });
    </script>

</body>

</html>