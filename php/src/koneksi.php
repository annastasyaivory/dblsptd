<?php
$server = "10.0.0.123";
$user = "admin";
$password = "Tacunglyvoryy26.";
$nama_database = "dblsptd";
$db = mysqli_connect($server, $user, $password,$nama_database);
if( !$db ){
die("Gagal terhubung dengan database: " .
mysqli_connect_error());
}