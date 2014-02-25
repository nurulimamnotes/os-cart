-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2014 at 06:22 PM
-- Server version: 5.5.29-log
-- PHP Version: 5.4.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokoonline`
--
CREATE DATABASE `tokoonline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tokoonline`;

-- --------------------------------------------------------

--
-- Table structure for table `os_anggota`
--

CREATE TABLE IF NOT EXISTS `os_anggota` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `os_anggota`
--

INSERT INTO `os_anggota` (`id`, `username`, `password`, `email`, `nama`, `alamat`, `hp`) VALUES
(1, 'ada', 'ada', 'ada@mail.com', 'ada', 'aja', '081');

-- --------------------------------------------------------

--
-- Table structure for table `os_kategori`
--

CREATE TABLE IF NOT EXISTS `os_kategori` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `deskripsi` varchar(250) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `os_kategori`
--

INSERT INTO `os_kategori` (`id`, `kategori`, `deskripsi`) VALUES
(9, 'Kaos Linux', 'Desain tentang Jokes Linux'),
(10, 'Kaos Windows', 'Kaos Buat Ngejek Pengguna Windows'),
(11, 'Kaos Mac OS X', 'Desain tentang kehebatan OS X'),
(12, 'Kaos Programmer', 'Desain tentang Kode yang Gokil'),
(13, 'Kaos Web Designers', 'Desain tentang Desainer Web = Code is Poetry'),
(14, 'Kaos Romantis', 'Lope Lope');

-- --------------------------------------------------------

--
-- Table structure for table `os_keranjang`
--

CREATE TABLE IF NOT EXISTS `os_keranjang` (
  `id_keranjang` int(5) NOT NULL AUTO_INCREMENT,
  `id_produk` varchar(30) NOT NULL,
  `id_sesi` varchar(100) NOT NULL,
  `tgl_belanja` date NOT NULL,
  `banyak_barang` int(5) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `os_pemesanan`
--

CREATE TABLE IF NOT EXISTS `os_pemesanan` (
  `id_pemesan` int(10) NOT NULL AUTO_INCREMENT,
  `id_produk` int(10) NOT NULL,
  `id_sesi` varchar(30) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `email_pemesan` varchar(30) NOT NULL,
  `alamat_pemesan` text NOT NULL,
  `hp_pemesan` varchar(20) NOT NULL,
  `status_pemesan` varchar(10) NOT NULL,
  `jumlah_pesanan` int(10) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  PRIMARY KEY (`id_pemesan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `os_pengaturan`
--

CREATE TABLE IF NOT EXISTS `os_pengaturan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(40) NOT NULL,
  `desk_toko` text NOT NULL,
  `alamat_toko` text NOT NULL,
  `email_toko` varchar(30) NOT NULL,
  `telp_toko` varchar(30) NOT NULL,
  `url_toko` varchar(20) NOT NULL,
  `akun_fb` varchar(50) NOT NULL,
  `akun_tw` varchar(50) NOT NULL,
  `akun_li` varchar(50) NOT NULL,
  `akun_yt` varchar(50) NOT NULL,
  `akun_gh` varchar(50) NOT NULL,
  `akun_bg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `os_pengaturan`
--

INSERT INTO `os_pengaturan` (`id`, `nama_toko`, `desk_toko`, `alamat_toko`, `email_toko`, `telp_toko`, `url_toko`, `akun_fb`, `akun_tw`, `akun_li`, `akun_yt`, `akun_gh`, `akun_bg`) VALUES
(1, 'Banten Clothes', 'Menjual berbagai macam busana muslim wanita, kerudung, jilbab dan lain-lain.', 'Jl. Samaun Bakri Km 23 Rau Trade Center Serang 42112 Banten', 'me@nurulimam.com', '0819868218', 'http://localhost/os/', 'https://www.facebook.com/nurulimamnotes', 'https://twitter.com/nurulimamnotes', 'http://www.linkedin.com/in/nurulimam', 'http://www.youtube.com/user/mnurulimam', 'https://github.com/nurulimamnotes', 'http://www.nurulimam.com');

-- --------------------------------------------------------

--
-- Table structure for table `os_produk`
--

CREATE TABLE IF NOT EXISTS `os_produk` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(30) NOT NULL,
  `harga` decimal(20,0) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_kategori` bigint(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `detail` text NOT NULL,
  `bintang` int(5) NOT NULL,
  `stok` varchar(20) NOT NULL DEFAULT 'Tersedia',
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `os_produk`
--

INSERT INTO `os_produk` (`id`, `nama_produk`, `harga`, `gambar`, `id_kategori`, `deskripsi`, `detail`, `bintang`, `stok`) VALUES
(8, 'Aku Padamu', 80000, 'product1-2.jpg', 14, 'Ini kerudung trend masa kini, sekarang banyak dipakai oleh mahasiswi dan\r\n pegawai kantor. Cocok untuk anda seorang wanita karir agar terlihat \r\nprofesional meski dengan berjilbab.', '', 0, 'Tersedia'),
(9, 'Java Language', 30000, 'product2-2.jpg', 12, 'Ini kerudung trend masa kini, sekarang banyak dipakai oleh mahasiswi dan\r\n pegawai kantor. Cocok untuk anda seorang wanita karir agar terlihat \r\nprofesional meski dengan berjilbab.', '', 0, 'Tersedia'),
(10, 'HTML & CSS', 80000, 'product2-2.jpg', 13, 'Ini kerudung trend masa kini, sekarang banyak dipakai oleh mahasiswi dan\r\n pegawai kantor. Cocok untuk anda seorang wanita karir agar terlihat \r\nprofesional meski dengan berjilbab.', '', 0, 'Tersedia'),
(11, 'Memorian of Steve Jobs', 60000, 'product2-2.jpg', 11, 'Ini kerudung trend masa kini, sekarang banyak dipakai oleh mahasiswi dan\r\n pegawai kantor. Cocok untuk anda seorang wanita karir agar terlihat \r\nprofesional meski dengan berjilbab.', '', 0, 'Tersedia'),
(12, 'Move To Trash', 70000, 'product1-1.jpg', 10, 'Ini kerudung trend masa kini, sekarang banyak dipakai oleh mahasiswi dan\r\n pegawai kantor. Cocok untuk anda seorang wanita karir agar terlihat \r\nprofesional meski dengan berjilbab.', '', 0, 'Tersedia'),
(14, 'Ususe Buntu', 75000, 'product1-2.jpg', 9, 'Apa saja yang penting OpenSUSE + Ubuntu', 'Ini kerudung trend masa kini, sekarang banyak dipakai oleh mahasiswi dan\r\n pegawai kantor. Cocok untuk anda seorang wanita karir agar terlihat \r\nprofesional meski dengan berjilbab.<br /><br />\r\n\r\nBahan :<br />\r\n- Katun / Cotton Combed<br />\r\n- Custom t-shirt dengan bahan dan cetakan berkualitas<br />\r\n- Tersedia dalam warna Hitam maupun Putih (sms kami untuk memilih warna)<br />\r\n- Tersedia Kaos untuk cowok dan kaos untuk cewek<br /><br />\r\n\r\nUKURAN KAOS (Dalam Centimeter)<br />\r\nXS = lebar 42 - panjang 64<br />\r\nS = lebar 46 - panjang 67<br />\r\nM = lebar 50 - panjang 70<br />\r\nL = lebar 54 - panjang 73<br />\r\nXL = lebar 58 - panjang 76<br />\r\n2XL = lebar 61 - panjang 77<br />\r\n\r\n3XL = lebar 67 - panjang 77<br />\r\nUkuran 3XL Dikenakan tambahan biaya 15.000', 5, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `os_user`
--

CREATE TABLE IF NOT EXISTS `os_user` (
  `id_user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `os_user`
--

INSERT INTO `os_user` (`id_user`, `password`, `email`, `level`) VALUES
('admin', 'a42b0407c9fbc64fcad8373ae85d73f1', 'me@nurulimam.com', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `os_kategori`
--
ALTER TABLE `os_kategori`
  ADD CONSTRAINT `os_kategori_ibfk_1` FOREIGN KEY (`id`) REFERENCES `os_produk` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `os_produk`
--
ALTER TABLE `os_produk`
  ADD CONSTRAINT `os_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `os_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
