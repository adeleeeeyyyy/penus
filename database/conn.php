<?php
$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'smkpnb_PPDB_2024';
$connection = mysqli_connect($hostname, $user, $password, $database);

if(!$connection) {
    die("koneksi gagal: ".mysqli_connect_error());
}
?>