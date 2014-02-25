<?php
/** Halaman Ini Berisi Konfigurasi Database Dan Fungsi Online Shop **/

// Membuat Koneksi Database
error_reporting(0);
$koneksi=mysql_connect("localhost", "root", "suck-it26");
$database=mysql_select_db("tokoonline",$koneksi);

// Pengaturan Website
function namatoko() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
	$namatoko = $ambil['nama_toko'];
}
  echo "$namatoko";
}
function alamattoko() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
	$alamat   = $ambil['alamat_toko'];
}
  echo "$alamat";
}
function desktoko() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
	$desktoko = $ambil['desk_toko'];
}
  echo "$desktoko";
}
function urltoko() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
	$urltoko   = $ambil['url_toko'];
}
  echo "$urltoko";
}
// Pengaturan Social Media
function akunfb() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
  $namatoko = $ambil['akun_fb'];
}
  echo "$akunfb";
}
function akuntw() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
  $namatoko = $ambil['akun_tw'];
}
  echo "$akuntw";
}
function akunli() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
  $namatoko = $ambil['akun_li'];
}
  echo "$akunli";
}
function akungh() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
  $namatoko = $ambil['akun_gh'];
}
  echo "$akungh";
}
function akunyt() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
  $namatoko = $ambil['akun_yt'];
}
  echo "$akunyt";
}
function akunbg() {
$toko = mysql_query("SELECT * FROM os_pengaturan");
while ($ambil = mysql_fetch_array($toko)) {
  $namatoko = $ambil['akun_bg'];
}
  echo "$akunbg";
}

// Waktu
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];
$tgl_sekarang = date("Ymd");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");
$nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
                    "Juni", "Juli", "Agustus", "September", 
                    "Oktober", "November", "Desember");
// Fungsi untuk keranjang belanja
function cart_content(){
  $ct_content = array();
  $sid = session_id();
  $sql = mysql_query("SELECT * FROM os_keranjang WHERE id_sesi='$sid'");
  while ($r=mysql_fetch_array($sql)) {
    $ct_content[] = $r;
  }
  return $ct_content;
}
// Fungsi untuk menghapus keranjang
function deletecart(){
  $del = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
  mysql_query("DELETE FROM os_keranjang WHERE tgl_belanja < '$del'");
  }
?>