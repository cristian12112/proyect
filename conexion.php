<?php

function conec(){
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'hospital';

    $mysqli = new mysqli($host, $username, $password, $database);
    
    mysqli_select_db($mysqli, $database);

    return $mysqli;
}





?>
