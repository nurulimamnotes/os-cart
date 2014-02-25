<?php
/** Halaman Ini Berfungsi Untuk Proses Penambahan, Perubahan Dan Penghapusan Data **/
session_start();
error_reporting(0);
include "../os-inc/os.php";

// Generate URL pengaturan dan aksi Halaman
$pengaturan=$_GET[pengaturan];
$delete = 'os_'.$pengaturan;
$aksi=$_GET[aksi];

// Menghapus data
if (isset($pengaturan) AND $aksi=='hapus'){
  mysql_query("DELETE FROM ".$delete." WHERE id ='$_GET[id]'");
  header('location:admin.php?pengaturan='.$pengaturan);
}

// Pengaturan Toko Online
elseif ($pengaturan=='toko-online' AND $aksi=='update'){
	$update = mysql_query("UPDATE os_pengaturan SET nama_toko = '$_POST[nama_toko]', desk_toko = '$_POST[desk_toko]', alamat_toko = '$_POST[alamat_toko]', email_toko = '$_POST[email_toko]', url_toko = '$_POST[url_toko]', telp_toko = '$_POST[telp_toko]' WHERE id = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>GAGAL Update Toko : ".(mysql_error())."</p>";
		}
	header('location:admin.php?pengaturan='.$pengaturan);
	}

// Pengaturan Jejaring Sosial
elseif ($pengaturan=='jejaring-sosial' AND $aksi=='update'){
	$update = mysql_query("UPDATE os_pengaturan SET akun_fb = '$_POST[akun_fb]', akun_tw = '$_POST[akun_tw]', akun_yt = '$_POST[akun_yt]', akun_li = '$_POST[akun_li]', akun_gh = '$_POST[akun_gh]', akun_bg = '$_POST[akun_bg]' WHERE id = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>GAGAL Update Akun Jejaring Sosial : ".(mysql_error())."</p>";
		}
	header('location:admin.php?pengaturan=jejaring-sosial&aksi=edit-akun&id=1');
	}

// Pengaturan Profil Pengguna
elseif ($pengaturan=='pengguna' AND $aksi=='update'){
$pass=md5($_POST['password']);
	$update = mysql_query("UPDATE os_user SET id_user = '$_POST[pengguna]', password = '$pass', email = '$_POST[email]' WHERE level = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>GAGAL Update Profil Pengguna : ".(mysql_error())."</p>";
		}
	header('location:admin.php?pengaturan=pengguna&aksi=edit-profil&level=admin');
	}

// Tambah Kategori
elseif ($pengaturan=='kategori' AND $aksi=='tambah'){
	$insert = mysql_query("INSERT INTO os_kategori (id,kategori,deskripsi) VALUES ('','$_POST[nama_kategori]','$_POST[deskripsi_kategori]')");
	if($insert == FALSE){
		echo "<p>GAGAL Menambahkan Kategori : ".(mysql_error())."</p>";
		}
	header('location:admin.php?pengaturan='.$pengaturan);
	}

// Update Kategori
elseif ($pengaturan=='kategori' AND $aksi=='update'){
	$update = mysql_query("UPDATE os_kategori SET kategori = '$_POST[nama_kategori]', deskripsi = '$_POST[deskripsi_kategori]' WHERE id = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>GAGAL Update Kategori : ".(mysql_error())."</p>";
		}
	header('location:admin.php?pengaturan='.$pengaturan);
	}

// Tambah Produk
elseif ($pengaturan=='produk' AND $aksi=='tambah'){
$lokasi_file 	= $_FILES['gambar_produk']['tmp_name'];
$tipe_file		= $_FILES['gambar_produk']['type'];
$nama_file		= $_FILES['gambar_produk']['name'];
move_uploaded_file($lokasi_file,"../os-media/img/$nama_file");
$insert = mysql_query("INSERT INTO os_produk 	(nama_produk,
												harga,
												gambar,
												id_kategori,
												deskripsi) 
										VALUES ('$_POST[nama_produk]',
												'$_POST[harga]',
												'$nama_file',
												'$_POST[id_kategori]',
												'$_POST[deskripsi]')");
header('location:admin.php?pengaturan='.$pengaturan);
}

// Update Produk
elseif ($pengaturan=='produk' AND $aksi=='update'){
	$lokasi_file	= $_FILES['gambar_produk']['tmp_name'];
	$tipe_file		= $_FILES['gambar_produk']['type'];
	$nama_file		= $_FILES['gambar_produk']['name'];
	if (empty($lokasi_file)){
		mysql_query("UPDATE os_produk SET nama_produk	= '$_POST[nama_produk]',
										harga		= '$_POST[harga]',
										id_kategori	= '$_POST[id_kategori]',
										deskripsi	= '$_POST[deskripsi]'
									WHERE id = '$_POST[id]'");
	}
	else {
		move_uploaded_file($lokasi_file,"../os-media/img/$nama_file");
		mysql_query("UPDATE os_produk SET nama_produk	= '$_POST[nama_produk]',
										harga		= '$_POST[harga]',
										gambar		= '$nama_file',
										id_kategori	= '$_POST[id_kategori]',
										deskripsi	= '$_POST[deskripsi]'
									WHERE id = '$_POST[id]'");
	}
	header('location:admin.php?pengaturan='.$pengaturan);
}
?>