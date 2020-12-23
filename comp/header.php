<?php
require('database/connection.php');
?>
<nav class="shadow-md flex justify-between z-30 fixed top-0 items-center py-3 px-5">
    <a href="index.php">
        <img src="images/logo.png"   class="logo" alt="logo" />
    </a>
    <input type="checkbox" class="hidden" id="humberger-toggle" />
    <label for="humberger-toggle" class="humberger">
        <span class="bar"></span>
    </label>
    <ul id="nav-list" class="nav-list flex uppercase items-center">
        <li><a class="nav-link <?php active('') ?>" href="http://www.maxcerasanitaryware.com">Home</a></li>
        <li class="dropdown flex justify-around"><a class="nav-link sanitaryware flex" href="">Sanitaryware <svg class="fill-current h-5 w-5 self-center ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /> </svg></a>
            <ul class="dropdown-menu absolute invisible ">


                <?php $sql_get_category_query = 'SELECT * FROM category';
                $sql_get_category_query_result = $connection->query($sql_get_category_query);

                if ($sql_get_category_query_result->num_rows > 0) {
                    while ($category = $sql_get_category_query_result->fetch_assoc()) {  ?>
                        <form class="" action="products.php" method="get">
                            <li class="pt-2" ><a href="">
                                    <input type="hidden" name="category" value="<?php echo $category['CName'] ?>">
                                    <button type="submit">
                                        <?php echo $category['CName'] ?>
                                    </button>

                                </a></li>
                        </form>

                <?php
                    }
                }
                ?>
            </ul>
        </li>
        <li><a class="nav-link" href="">Dowloads</a></li>
        <li><a class="nav-link <?php active('#about') ?>" href="#about">About us</a></li>
        <li><a class="nav-link <?php active('contact.php') ?>" href="contact.php">Contact us</a></li>
    </ul>
</nav>

<?php
function active($current_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($current_page == $url) {
        echo 'active';
    }
}
?>