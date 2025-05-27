<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "finance_kids";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
