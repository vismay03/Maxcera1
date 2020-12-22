<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);

require('database/connection.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <link rel="preload" as="style" href="css/footer.css" onload="this.rel='stylesheet'" />
    <link rel="preload" as="style" href="css/style.css" onload="this.rel='stylesheet'" />
    <link rel="preload" as="style" href="css/responsiveIndex.css" onload="this.rel='stylesheet'" />
    <link rel="preload" as="style" href="css/header.css" onload="this.rel='stylesheet'" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/Hover-Buttons-master/css/hoverbuttons.css">
    <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
    <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



</head>

<body onload="load()">



    <div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;" class="text-white">Loading..</div>



    <!-- NAVBAR -->
    <?php
    include('comp/header.php');
    ?>

    <section id="landingImg-slider" class="landing splide sm:mb-32 w-full">
        <section class=" splide__track ">
            <div class="splide__list">
                <div class="splide__slide">

                </div>
                <div class="splide__slide">

                </div>
                <div class="splide__slide">

                </div>



            </div>
        </section>
    </section>

    <!-- ABOUT -->

    <div id=" about" class="flex justify-center about py-16 sm:py-32">
        <img src="images/2.jpg" class="about-img" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="linear" loading="lazy" alt="" />
        <div class="about-content self-center text-white" data-aos="fade-left" data-aos-offset="300" data-aos-duration="1000" data-aos-easing="linear">
            <h2 class="text-4xl uppercase " data-aos-delay="1000" data-aos="flip-up">About us</h2>
            <p class="text-md mt-8">Maxcera sanitaryware is a Proprietorship firm manufacturing an excellent quality range of Bathroom Sanitaryware like Water Closets, Designer Basins, Toilet Pans and Seat Covers etc </p>
            <p class="text-md mt-3">These products are sourced from reliable market vendors and can be availed by our clients at reasonable prices.
            </p>
            <p class="text-md mt-3">Under the guidances of our mentor "Mr. Mitesh, Who holds profound knowledge and experience in this domain, we have been able to aptly satisfy our clients.</p>
        </div>
    </div>


    <!-- SVG -->

    <img src="images/d.svg" class="svg-right absolute w-64 h-64 mb-6 -z-10 opacity-25  right-0" />
    <img src="images/2.svg" class="svg-left absolute w-64 h-64 mb-6 -z-10 opacity-25  -left-14" />

    <!-- COLLECTION -->

    <div class="flex flex-col  justify-center  mx-auto collection   py-24 sm:py-32" data-aos="fade-left" data-aos-duration="2000" data-aos-easing="linear">
        <h2 class="text-4xl collection-title  uppercase text-center" data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="top-center">Our COLLECTION</h2>
        <div id="card-slider" class="splide flex justify-center flex-wrap">
            <section class='splide__track py-20'>
                <div class="splide__list w-full">


                    <?php
                    $sql_get_category_query = 'SELECT * FROM category';
                    $sql_get_category_query_result = $connection->query($sql_get_category_query);


                    if ($sql_get_category_query_result->num_rows > 0) {
                        while ($rows = $sql_get_category_query_result->fetch_assoc()) {
                    ?>

                            <form action="products.php" method="get" class="splide__slide flex justify-center">

                                <div class="">
                                    <input type="text" name="category" value="<?php echo $rows['CName'];  ?>" hidden>

                                    <button type="submit" class="category-btn grid justify-center " value="">

                                        <img src='uploads/category/<?php echo $rows['Image']; ?>' class='self-center' loading='lazy' alt='' />
                                        <div class="circle"></div>
                                    </button>
                                    <h3 class='uppercase text-white  text-center text-2xl mt-8'> <?php echo $rows['CName'];  ?></h3>

                                </div>


                            </form>






                    <?php
                        }
                    }
                    ?>

                </div>

            </section>

        </div>

    </div>
    <img src="images/d.svg" class="svg-2-right absolute w-64 h-64 mb-6 -z-10 opacity-25  right-0" />
    <img src="images/2.svg" class="svg-2-left absolute  w-64 h-64 mb-6 -z-20 opacity-25" />

    <!-- PRODUCTS -->

    <div class=" flex flex-col justify-center mx-auto product my-16 sm:py-16" data-aos="fade-left" data-aos-duration="2000" data-aos-easing="linear">
        <h2 class="text-4xl product-title uppercase text-center" data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="top-center">Premium Products</h2>
        <div id="premium-slider" class="splide flex justify-center flex-wrap">
            <section class='splide__track py-20'>
                <div class="splide__list ">

                    <?php
                    $sql_get_category_query = 'SELECT * FROM premium';
                    $sql_get_category_query_result = $connection->query($sql_get_category_query);

                    if ($sql_get_category_query_result->num_rows > 0) {
                        while ($premium = $sql_get_category_query_result->fetch_assoc()) {
                    ?>

                            <div class="flex justify-center mt-16 splide__slide ">
                                <img class="hbtn animate__animated animate__fadeInRightBig hb-border-off3 " src="uploads/premium/<?= $premium['Image'] ?>" loading="lazy" class="self-center" alt="" />

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

    <div data-parallax="scroll" data-image-src="images/cusImg.png" class="parallax-window company-facts flex flex-col sm:flex-row justify-around">
        <section class="facts-content flex flex-wrap h-full justify-center w-full">
            <div class="sm:w-1/2 w-full self-center flex justify-center text-center">


                <h2 class="facts-title py-8 self-center py-4 text-4xl text-center">
                    Some of Our Company’s Real Facts</h2>

            </div>
            <div class="sm:w-1/2 w-full self-center">
                <div class="flex justify-around align-center">
                    <section class="flex flex-col w-40 text-center">
                        <img src="images/icons/1.png" class="w-24 h-24 self-center" loading="lazy" alt="" />
                        <h2>215+</h2>
                        <h2>Happy Clients</h2>
                    </section>

                    <section class="flex flex-col w-40 text-center">
                        <img src="images/icons/2.png" class="w-24 h-24 self-center" loading="lazy" alt="" />
                        <h2>24 x 7</h2>
                        <h2> Customer Support</h2>
                    </section>
                </div>
                <div class="flex justify-around mt-8">
                    <section class="flex flex-col justify-center  w-40 text-center">
                        <img src="images/icons/4.png" class="w-24 h-24 self-center" loading="lazy" alt="" />
                        <h2>675+</h2>
                        <h2>
                            Creative Produts</h2>
                    </section>
                    <section class="flex flex-col w-40 text-center">
                        <img src="images/icons/3.png" class="w-32 h-24 self-center" loading="lazy" alt="" />
                        <h2>25+
                        </h2>
                        <h2>diligent employees</h2>
                    </section>

                </div>
        </section>
    </div>

    <!-- ENQUIRY -->

    <div class="flex justify-around w-full flex-col sm:flex-row flex-wrap-reverse enquiry text-white py-6">
        <section class="text-center ">
            <h2 class="text-center ">Have Questions? Call Us: +91 90161 61636</h2>
            <p class="text-center">Or mail us on info@maxcerasanitarywear.com</p>
        </section>
        <a class="py-2 px-4 hover:text-white self-center mt-10  sm:mt-0 hbtn hb-fill-middle2-bg" href="contact.php">Send An Enquiry</a>
    </div>
    <!-- FOOTER -->

    <?php
    include('comp/footer.php');
    ?>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js">
        $(function() {
            $.ajax({
                url: 'index.php',
                dataType: 'script',
                beforeSend: function(evt) {
                    if (!$('.preloader').is('.show')) $('.preloader').addClass('show');
                },
                complete: function(jqXHR, textStatus) {
                    // disable either here or at the end
                    $('.preloader').removeClass('show');

                    // handle error and success
                }
            });
        });
    </script>

    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




    <script>
        $('.parallax-window').parallax({
            imageSrc: 'images/cusImg.png'
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#card-slider', {
                perPage: 3,
                rewind: true,
                gap: '20px',
                lazyLoad: 'nearby',
                breakpoints: {
                    '768': {
                        perPage: 1,

                    },
                    '480': {
                        perPage: 1,

                    },

                }
            }).mount();
            new Splide('#premium-slider', {
                perPage: 3,
                rewind: true,


                breakpoints: {
                    768: {
                        perPage: 1,
                    }
                }
            }).mount();




            var splideImg = new Splide('#landingImg-slider', {
                rewind: true,

                autoplay: true,
                type: 'loop',

                perPage: 1,

            }).mount();

        });
    </script>
    <script script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>


    <script>
        var preloader = document.querySelector('.preloader');

        function load() {
            preloader.style.display = 'none';
        }
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>