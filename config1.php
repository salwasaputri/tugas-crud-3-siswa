<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "sekolah3";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>