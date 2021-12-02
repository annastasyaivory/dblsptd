<?php

include 'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$skema=$_POST['skema'];   

mysqli_query($db, "INSERT into registrasi values ('$id','$nama','$alamat','$email','$skema')");

header("location:insert-sukses.php");
