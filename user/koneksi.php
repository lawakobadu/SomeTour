<?php
$servername = "localhost";
$database = "pariwisata";
$username = "root";
$password = "";

$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>