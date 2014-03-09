<?php 
  $url = $_GET['halaman'];
  if($url == 'produk') {
    require_once "os-inc/produk.php";
  } elseif ($url == 'tentang-kami.html') {
    require_once "os-inc/info.php";
  } elseif ($url == 'hubungi-kami.html') {
    require_once "os-inc/kontak.php";
  } elseif ($url == 'bantuan.html') {
    require_once "os-inc/bantuan.php";
  } elseif ($url == 'keranjang') {
    require_once "os-inc/keranjang.php";
  } elseif ($url == 'pembayaran') {
    require_once "os-inc/pembayaran.php";
  } elseif ($url == 'cart') {
    require_once "include/cart.php";
  } elseif ($url == 'order') {
    require_once "include/order.php";
  } elseif ($url == 'promo') {
    require_once "include/promo_member.php";
  } elseif ($url == 'tentang_kami') {
    require_once "include/tentang_kami.php";
  } elseif ($url == 'bantuan') {
    require_once "include/bantuan.php";
  } elseif ($url == 'syarat_dan_ketentuan') {
    require_once "include/syarat_dan_ketentuan.php";
  } elseif ($url == 'hubungi_kami') {
    require_once "include/hubungi_kami.php";
  } elseif ($url == 'semua_produk') {
    require_once "include/semua.php";
  } elseif ($url == 'pengantar') {
    require_once "include/pengantar.php";
  } elseif ($url == 'status') {
    require_once "include/status.php";
  } elseif ($url == 'efek') {
    require_once "include/efek.php";
  } elseif ($url == 'kontrak') {
    require_once "include/kontrak.php";
  } elseif ($url == 'pengiriman') {
    require_once "include/pengiriman.php";
  } elseif ($url == 'pembatalan') {
    require_once "include/pembatalan.php";
  } elseif ($url == 'pembatalan_pembeli') {
    require_once "include/pembatalan_pembeli.php";
  } elseif ($url == 'barang_rusak') {
    require_once "include/barang_rusak.php";
  } elseif ($url == 'kupon') {
    require_once "include/kupon.php";
  } elseif ($url == 'tanggung_jawab') {
    require_once "include/tanggung_jawab.php";
  } elseif ($url == 'terimakasih') {
    require_once "include/terimakasih.php";
  } else {
    // Menampilkan Halaman Utama
    require_once "os-inc/beranda.php";
  } 
?>