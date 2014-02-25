<?php
/** Halaman Ini Berfungsi Sebagai Proses Login Administrator **/

// Sesion Dimulai
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Membuat Koneksi Database
include "../os-inc/os.php";

// Mencari Password Berdasarkan Username
$query = "SELECT * FROM os_user WHERE id_user = '$username'";
$hasil = mysql_query($query) or die("Kesalahan Database");
$data  = mysql_fetch_array($hasil);

// Cek Password Yang Dimasukkan Dengan Yang Terenkripsi Di Database
if ($data['password'])
{
// Jika Cocok, Maka Lakukan Pembuatan Session
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
// Lalu Redirect Menuju Halaman Administrator
  header('location:admin.php?pengaturan=beranda');
}
else
// Jika Password Tidak Sesuai, Maka Lakukan Redirect Ke Halaman Login
  echo "<script>window.alert('Username atau Password Salah!!!');
        window.location=('index.php')</script>";

?>