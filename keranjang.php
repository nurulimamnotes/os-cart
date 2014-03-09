<?php
session_start();
error_reporting(0);
include "os-inc/os.php";
$aksi=$_GET[aksi];
$idku = $_POST[idku];
$idget = $_GET[id];
$id_sesi = session_id();
$beli=$_GET[beli];

if($aksi=='tambahkan'){
  $sql = mysql_query("SELECT id_produk FROM os_keranjang WHERE id_produk='$_POST[idku]' AND id_sesi='$id_sesi'");
  $num = mysql_num_rows($sql);
  if ($num==0){
    mysql_query("INSERT INTO os_keranjang(id_produk,
                      id_sesi,
                      tgl_belanja,
                      banyak_barang,
                      warna,
                      ukuran)
                  VALUES  ('$_POST[idku]',
                      '$id_sesi',
                      '$tgl_sekarang',
                      '$_POST[p_quantity]',
                      '$_POST[warna]',
                      '$_POST[ukuran]')") or die (mysql_error());
  }
  else {
    mysql_query("UPDATE os_keranjang SET banyak_barang = banyak_barang + '$_POST[p_quantity]', warna = '$_POST[warna]', ukuran = '$_POST[ukuran]' WHERE id_sesi = '$id_sesi' AND id_produk='$_POST[idku]'") or die (mysql_error());
  }
  deletecart();
  header('location:index.php?halaman=keranjang');
  }       
elseif ($aksi=='tambah'){
  $sql = mysql_query("SELECT id_produk FROM os_keranjang WHERE id_produk='$_GET[id]' AND id_sesi='$id_sesi'");
  $num = mysql_num_rows($sql);
  if ($num==0){
    mysql_query("INSERT INTO os_keranjang(id_produk,
                      id_sesi,
                      tgl_belanja,
                      banyak_barang,
                      warna,
                      ukuran)
                  VALUES  ('$_GET[id]',
                      '$id_sesi',
                      '$tgl_sekarang',
                      '1',
                      '$_POST[warna]',
                      '$_POST[ukuran]')") or die (mysql_error());
  }
  else {
    mysql_query("UPDATE os_keranjang SET banyak_barang = banyak_barang + '$_POST[p_quantity]', warna = '$_POST[warna]', ukuran = '$_POST[ukuran]' WHERE id_sesi = '$id_sesi' AND id_produk='$_GET[id]'") or die (mysql_error());
  }
  deletecart();
  header('location:index.php?halaman=keranjang');
  }       
elseif ($aksi=='hapus'){
  mysql_query("DELETE FROM os_keranjang WHERE id_keranjang='$_GET[id_keranjang]'");
  header('location:index.php?halaman=keranjang');
  }       
elseif ($aksi=='edit'){
  mysql_query("UPDATE os_keranjang SET banyak_barang = '$_POST[p_quantity]' WHERE id_keranjang='$_POST[id_keranjang]'");
  header('location:index.php?halaman=keranjang');
  }
elseif ($aksi=='beli'){
  $ct_content = cart_content();
  $jml = count($ct_content);
  $now = date("Ymd");
  for($i=0; $i<$jml; $i++){
  mysql_query("INSERT INTO os_pemesanan(id_produk,
                                            id_sesi,
                                            nama_pemesan,
                                            alamat_pemesan,
                                            hp_pemesan,
                                            met_kirim,
                                            met_bayar,
                                            catatan,
                                            jumlah_pesanan,
                                            tanggal_pemesanan)
                                    VALUES ({$ct_content[$i]['id_produk']},
                                            '$id_sesi',
                                            '$_POST[nama_pemesan]',
                                            '$_POST[alamat_pemesan], $_POST[kota], $_POST[pos], $_POST[provinsi], $_POST[negara]',
                                            '$_POST[hp_pemesan]',
                                            '$_POST[shippingmethod]',
                                            '$_POST[paymentmethod]',
                                            '$_POST[catatanbyr], $_POST[catatanbrg]',
                                            {$ct_content[$i]['banyak_barang']},
                                            '$now')");
        }
  for($i=0; $i<$jml; $i++){
    mysql_query("DELETE FROM os_keranjang WHERE id_keranjang = {$ct_content[$i]['id_keranjang']}");
    }
    echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
        window.location=('index.php?halaman=bantuan.html')</script>";
  }                                 
?>