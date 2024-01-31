<?php
//koneksi database
include '../koneksi/koneksi.php';

//menangkap data yang dikirim dari form
$NIS = $_POST['NIS'];
$NamaLengkap = $_POST['NamaLengkap'];
$Email = $_POST['Email'];
$Alamat = $_POST['Alamat'];
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Level = $_POST['Level'];
// menginput data ke database
mysqli_query($koneksi,"INSERT into user(NIS,NamaLengkap,Email,Alamat,Username,Password,Level) values('$NIS','$NamaLengkap','$Email','$Alamat','$Username','$Password','$Level')");
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
?>
