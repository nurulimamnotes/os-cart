<?php
$host 	= "localhost";
$user 	= "root";
$pass	= "suck-it26";
$nama	= "tokoonline";

$koneksi = mysql_connect($host, $user, $pass);
$database = mysql_select_db($nama);

if (!$koneksi){
echo "Tidak terhubung ke dalam Database";
} else {
if(!$database){
echo "Database kosong";
}
}
?>