<?php

// $host = "localhost";
// $usuario = "cbainfra";
// $senha = "Cba@2024";
// $database = "CBA";

$host = "sql109.infinityfree.com";
$usuario = "if0_36615836";
$senha = "4dqhzATuQ9tohmC";
$database = "if0_36615836_CBA";


$mysqli = mysqli_connect($host, $usuario, $senha, $database);

// Check connection
if(!$mysqli){
    die("Failed to connect to MySQL: " + $mysqli_connect_error());
}


?>