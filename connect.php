<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'websys';

    $mysqli = mysqli_connect($host, $user, $password, $db_name);

    if(!$mysqli){
        die('database connection failed '.mysqli_connect_error());
    }
?>