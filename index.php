<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <?php
    include('comp/header.php');
    ?>

    <section>
        <img src="images/landingImg.png" loading="lazy" alt="" />
    </section>

    <!-- ABOUT -->

    <div class="flex justify-center about py-32">
        <img src="images/aboutImg.png" loading="lazy" class="about-img" alt="" />
        <div class="about-content self-center text-white">
            <h2 class=" text-5xl uppercase">About us</h2>
            <p class="text-lg mt-8">SOCCA SanitaryWares is a modernized enterprise integrated with R&D, manufacturing, sales and services, having a complete set of integrated sales team, applying brand strategy. Setting up enterprise image, and being the advocate and Pioneer in the field of Ceramics.
            </p>
            <p class="text-lg mt-3">We are feeling very happy to introduce our new venture SOCCA SANITARYWARE with a wide range of SanitaryWare products and accessories.
            </p>
        </div>
    </div>

    <!-- COLLECTION -->

    <div class="flex flex-col justify-center mx-auto collection pb-32">
        <h2 class="text-5xl collection-title uppercase text-center"> Our COLLECTION</h2>
        <div class="mt-12 flex flex-wrap justify-around">
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

    <div class="flex flex-col justify-center mx-auto product pb-32">
        <h2 class="text-5xl product-title uppercase text-center">Premium Products</h2>
        <div class="mt-12 flex flex-col md:flex-row justify-around">
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

    <div class="flex justify-around w-full flex-col sm:flex-row flex-wrap enquiry bg-black text-white py-6">
        <section class="text-center">
            <h2>Have Questions? Call Us: +91 90161 61636</h2>
            <p>Or mail us on info@maxcerasanitarywear.com</p>
        </section>
        <a class="py-2 px-4 hover:text-white self-center mt-5 sm:mt-0" href="contact.php">Send An Enquiry</a>
    </div>

    <!-- FOOTER -->

    <footer class="flex justify-center pt-10 flex-col  sm:p-0 sm:w-full">
        <div class="flex flex-col pl-5 sm:flex-row justify-around" >
        <section class="text-white ">
        <img src="images/Maxcera-logo.png" class="logo mx-auto sm:mx-0" alt="logo" />
            <h3 class="mt-3 text-center sm:text-left" >Follow us on:</h3>

            <section class="flex social mx-auto sm:mx-0 justify-between w-24 mt-1" >
                <svg width="20" height="20" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M283.334 33.3359H116.667C70.6436 33.3359 33.334 70.6455 33.334 116.669V283.336C33.334 329.36 70.6436 366.669 116.667 366.669H283.334C329.358 366.669 366.667 329.36 366.667 283.336V116.669C366.667 70.6455 329.358 33.3359 283.334 33.3359Z" stroke="white" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M266.663 189.505C268.72 203.376 266.351 217.542 259.892 229.989C253.434 242.435 243.216 252.529 230.69 258.833C218.165 265.137 203.971 267.332 190.126 265.104C176.282 262.876 163.492 256.34 153.577 246.424C143.662 236.509 137.125 223.72 134.898 209.875C132.67 196.031 134.864 181.837 141.169 169.311C147.473 156.786 157.566 146.567 170.013 140.109C182.459 133.651 196.626 131.281 210.496 133.338C224.645 135.436 237.744 142.029 247.858 152.143C257.972 162.258 264.565 175.356 266.663 189.505Z" stroke="white" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M291.666 108.336H291.833" stroke="white" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg width="20" height="20" viewBox="0 0 198 349" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M190.506 7.99219H140.496C118.39 7.99219 97.1891 16.7722 81.5579 32.4007C65.9266 48.0292 57.1451 69.2261 57.1451 91.3281V141.33H7.13477V207.998H57.1451V341.336H123.825V207.998H173.836L190.506 141.33H123.825V91.3281C123.825 86.9077 125.582 82.6683 128.708 79.5426C131.834 76.4169 136.074 74.6609 140.496 74.6609H190.506V7.99219Z" stroke="white" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" />
                </svg><svg width="20" height="20" viewBox="0 0 382 314" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M374.398 7.17541C358.435 18.4334 340.76 27.044 322.054 32.6755C312.014 21.134 298.671 12.9536 283.83 9.24085C268.988 5.52807 253.364 6.462 239.071 11.9163C224.778 17.3706 212.505 27.0822 203.912 39.7375C195.319 52.3928 190.821 67.3812 191.026 82.6757V99.3424C161.731 100.102 132.702 93.606 106.525 80.4331C80.3487 67.2603 57.8369 47.8195 40.9947 23.8421C40.9947 23.8421 -25.6861 173.843 124.346 240.51C90.0138 263.809 49.1157 275.492 7.6543 273.843C157.686 357.177 341.058 273.843 341.058 82.1757C341.043 77.5332 340.596 72.9022 339.724 68.3423C356.738 51.5671 368.744 30.3874 374.398 7.17541V7.17541Z" stroke="white" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>



            </section>


            <section class="flex flex-col mt-3 sm:mt-0">

                <h3 class="mt-3 flex items-end">
                    <svg width="20" height="20" class="self-end" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6.49606C6 5.66924 6.67183 4.99738 7.5 4.99738C8.32817 4.99738 9 5.66924 9 6.49606C9 7.3229 8.32816 7.99478 7.5 7.99478C6.67184 7.99478 6 7.3229 6 6.49606Z" fill="#F2F2F2" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 6.49606C1 2.90877 3.91117 0 7.5 0C11.0888 0 14 2.90877 14 6.49606C14 9.1701 12.6617 11.2886 11.2284 12.7209C10.5102 13.4387 9.75773 13.9953 9.11325 14.3751C8.79117 14.5649 8.49017 14.7141 8.22849 14.8174C7.98144 14.9149 7.72211 14.9909 7.5 14.9909C7.27789 14.9909 7.01856 14.9149 6.77151 14.8174C6.50983 14.7141 6.20883 14.5649 5.88675 14.3751C5.24227 13.9953 4.48984 13.4387 3.77156 12.7209C2.33829 11.2886 1 9.1701 1 6.49606ZM7.5 3.99738C6.12017 3.99738 5 5.11633 5 6.49606C5 7.87579 6.12016 8.99478 7.5 8.99478C8.87984 8.99478 10 7.87579 10 6.49606C10 5.11633 8.87983 3.99738 7.5 3.99738Z" fill="#F2F2F2" />
                    </svg>
                    Maxcera Sanitaryware</h3>

                <h2 class="text-xs w-64">


                    Shop No. 20,
                    Shrinath Complex, No. 8A National Highway,
                    Trajpar, Morbi, Rajkot-363642, Gujarat, India

                </h2>
                <h3 class="mt-3 leading-none flex items-end ">
                    <svg width="15" height="15" class="self-center mr-1" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 0C1.11929 0 0 1.11929 0 2.5V4.5C0 10.299 4.70101 15 10.5 15H12.5C13.8807 15 15 13.8807 15 12.5V11.118C15 10.5499 14.679 10.0305 14.1708 9.77639L11.7549 8.56843C10.9384 8.1602 9.94971 8.56975 9.66105 9.43573L9.36328 10.329C9.25014 10.6684 8.90197 10.8705 8.55114 10.8003C6.35528 10.3612 4.63885 8.64472 4.19967 6.44886C4.12951 6.09803 4.33156 5.74986 4.67097 5.63672L5.7796 5.26718C6.52319 5.01932 6.95058 4.24075 6.76048 3.48035L6.17444 1.1362C6.0075 0.468446 5.40752 0 4.71922 0H2.5Z" fill="white" />
                    </svg>
                    Phone:
                </h3>
                <h2 class="text-xs mt-1">
                    +91 9090103010
                </h2>
                <h3 class="mt-3 leading-none flex items-end">
                    <svg width="20" height="15" class="self-end mr-1" viewBox="0 0 437 327" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M364.167 54.5H72.8337C52.8045 54.5 36.5991 66.7625 36.5991 81.75L36.417 245.25C36.417 260.237 52.8045 272.5 72.8337 272.5H364.167C384.196 272.5 400.584 260.237 400.584 245.25V81.75C400.584 66.7625 384.196 54.5 364.167 54.5ZM364.167 109L218.5 177.125L72.8337 109V81.75L218.5 149.875L364.167 81.75V109Z" fill="white" />
                    </svg>
                    email:
                    <h3>
                        <h2 class="text-xs mt-1">
                            maxcerasanitaryware
                        </h2>

            </section>
        </section>
        <section class="text-white flex flex-col mt-3 sm:mt-0">

            <h3>Sanitaryware</h3>
          
            <a class="text-sm sm:mt-3" href="#">commods</a>
            <a class="text-sm sm:mt-1" href="#">washbasin</a>
            <a class="text-sm sm:mt-1" href="#">urinals & other</a>

        </section>
        <section class="text-white flex flex-col mt-3 sm:mt-0">

            <h3>Useful links</h3>
           
            <a class="text-sm sm:mt-3" href="#">about us</a>
            <a class="text-sm sm:mt-1" href="#">contact us</a>

        </section>

        </div>

        <hr class="mt-10 mb-1" >


        <section class="text-white flex text-center flex-wrap justify-center sm:justify-around text-xs py-2" >
            <h2>&copy; copyright maxcera sanitaryware. All rights reserved.</h2>
            <h2 class="mt-1 sm:mt-0" >Design and developed by <a class="company-link" href="#">  Virtual Spark Technologies </a></h2>
        </section>


    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
</body>

</html>