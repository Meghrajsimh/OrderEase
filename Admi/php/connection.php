<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "add";

    $connection = new  mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        echo $connection->connect_error ;
    } 

?>