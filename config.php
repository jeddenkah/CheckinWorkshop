<?php

$server = "localhost:3307";
$user = "root";
$password = "";
$nama_database = "workshop_datascience";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>