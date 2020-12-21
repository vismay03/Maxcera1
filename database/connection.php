<?php

//$connection = new  mysqli("localhost", "u588429006_Maxcera", "Maxcera159357", "u588429006_Maxcera");
$connection = new  mysqli("localhost", "root", "", "Maxcera");
if ($connection->connect_error) {
    die('Connection Failed ' . $connection->connect_error);
}

?>