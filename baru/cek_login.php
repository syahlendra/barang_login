<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi,"select * from user where username= '$username' and password= '$password'");
$cek = mysqli_num_rows($data);
if ($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "simpan";
    header("location: barang.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>