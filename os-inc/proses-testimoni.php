<?php
// Tambah Testimoni
include 'os.php';
  $insert = mysql_query("INSERT INTO os_testimoni (id,id_testimoni,nama,email,waktu,testimoni) VALUES ('','$_POST[id_testimoni]','$_POST[nama]','$_POST[email]','$_POST[waktu]','$_POST[testimoniku]')");
  if($insert == FALSE){
    echo "<p>GAGAL Menambahkan Testimoni : ".(mysql_error())."</p>";
    } else {
    header('location:../?halaman=produk&id='.$_POST['id_testimoni']);
  }
?>