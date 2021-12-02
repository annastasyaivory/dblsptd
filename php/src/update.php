<?php 
include 'koneksi.php';
 
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$skema = $_POST['skema'];

mysqli_query($db,"update registrasi set nama='$nama', alamat='$alamat', email='$email', skema='$skema' where id='$id'");

header("location:admin.php");
 
?>