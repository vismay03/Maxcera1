<?php

$connection = new  mysqli('localhost', 'root', '', 'maxcera');
if ($connection->connect_error) {
    die('Connection Failed ' . $connection->connect_error);
}

?>