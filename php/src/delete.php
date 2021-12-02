<?php
include 'koneksi.php';

$id=$_GET ['id'];

mysqli_query($db, "delete from registrasi where id='$id'");

header("location:admin.php");
?>