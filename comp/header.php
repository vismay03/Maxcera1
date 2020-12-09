
    <nav class="shadow-md flex justify-between z-10 w-full fixed top-0 items-center py-4 px-5" >
        <a href="index.php">
            <img src="images/Maxcera-logo.png" class="logo" alt="logo" />
        </a>
        <input type="checkbox" class="hidden"  id="humberger-toggle" />
        <label for="humberger-toggle" class="humberger" >
            <span class="bar"></span>
        </label>
        <ul id="nav-list" class="nav-list flex uppercase items-center">
            <li><a class="nav-link <?php active('') ?>" href="http://www.maxcerasanitaryware.com">Home</a></li>
            <li><a class="nav-link" href="">Sanitarware</a></li>
            <li><a class="nav-link" href="">Dowloads</a></li>
            <li><a class="nav-link <?php active('#about') ?>" href="#about">About us</a></li>
            <li><a class="nav-link <?php active('contact.php') ?>" href="contact.php">Contact us</a></li>
        </ul>
    </nav>
  
    <?php 
        function active($current_page){
            $url_array = explode('/', $_SERVER['REQUEST_URI']);
            $url = end($url_array);
            if ($current_page == $url) {
                    echo 'active';
            }

            
        }
    ?>