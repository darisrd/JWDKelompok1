<?php

$server = "127.0.0.1";
$user = "root";
$password = "";
$nama_database = "dbrent";

$db = mysqli_connect($server, $user, $password, $nama_database,3306);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

