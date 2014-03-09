          <?php 
            if ($_GET[pengaturan]=='beranda'){
            require "sys/beranda.php";
            }
            // Tambah Kategori
            elseif ($_GET[pengaturan]=='kategori'){
            require_once "sys/kategori.php";
            }
            // Tambah Penanda
            elseif ($_GET[pengaturan]=='penanda'){
            require_once "sys/penanda.php";
            }
            // Tambah Produk
            elseif ($_GET[pengaturan]=='produk'){
            require_once "sys/produk.php";
            }
            // Tambah Halaman
            elseif ($_GET[pengaturan]=='halaman'){
            require_once "sys/halaman.php";
            }
            // Pengaturan Toko Online
            elseif ($_GET[pengaturan]=='toko-online'){
            require_once "sys/pengaturan.php";
            }
            // Pengaturan Akun Jejaring Sosial
            elseif ($_GET[pengaturan]=='jejaring-sosial'){
            require_once "sys/pengaturan.php";
            }
            // Pengaturan Profil Pengguna
            elseif ($_GET[pengaturan]=='pengguna'){
            require_once "sys/pengaturan.php";
            }
            // Info Server
            elseif ($_GET[pengaturan]=='info'){
            require_once "sys/pengaturan.php";
            }
            //Report
            elseif ($_GET[pengaturan]=='laporan'){
            require_once "sys/laporan.php";
            }
         ?>