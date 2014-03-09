<?php
error_reporting(0);
session_start();
// Membuat Koneksi Database
include "../os-inc/os.php";

// Cek Apakah Ada Session Masuk Atau Tidak ?
if (empty($_SESSION[username]) AND empty($_SESSION[password])){
  // Jika Tidak Ada, Maka Tampilkan Halaman Login
  include "index.php";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Online Shop Administrator</title>

    <!-- Core CSS - Include with every page -->
    <link href="../os-media/theme/admin/css/bootstrap.css" rel="stylesheet">
    <link href="../os-media/theme/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Buttons -->
    <link href="../os-media/theme/admin/css/plugins/social-buttons/social-buttons.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="../os-media/theme/admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="../os-media/theme/admin/css/sb-admin.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="../os-media/js/html5shiv.js"></script>
      <script src="../os-media/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php?pengaturan=beranda">OS Cart</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admin.php?pengaturan=pengguna&aksi=edit-profil&level=admin"><i class="fa fa-user fa-fw"></i> Profil Pengguna</a>
                        </li>
                        <li><a href="<?php urltoko(); ?>" target="_blank"><i class="fa fa-shopping-cart fa-fw"></i> Lihat Website</a>
                        </li>
                        <li><a href="admin.php?pengaturan=toko-online&aksi=edit-toko&id=1"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="admin.php?pengaturan=beranda" <?php if($_GET['pengaturan']=='beranda'){?>class="active"<?php } ?>><i class="fa fa-home fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Produk<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admin.php?pengaturan=produk" <?php if($_GET['pengaturan']=='produk'){?>class="active"<?php } ?>>Lihat Produk</a>
                            </li>
                            <li>
                                <a href="admin.php?pengaturan=produk&aksi=tambah-produk" <?php if($_GET['pengaturan']=='produk' AND $_GET['aksi']=='tambah-produk'){?>class="active"<?php } ?>>Tambah Produk</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book fa-fw"></i> Halaman<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admin.php?pengaturan=halaman" <?php if($_GET['pengaturan']=='halaman'){?>class="active"<?php } ?>>Lihat Halaman</a>
                            </li>
                            <li>
                                <a href="admin.php?pengaturan=halaman&aksi=tambah-halaman" <?php if($_GET['pengaturan']=='halaman' AND $_GET['aksi']=='tambah-halaman'){?>class="active"<?php } ?>>Tambah Halaman</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tags fa-fw"></i> Kategori<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admin.php?pengaturan=kategori" <?php if($_GET['pengaturan']=='kategori'){?>class="active"<?php } ?>>Lihat Kategori</a>
                            </li>
                            <li>
                                <a href="admin.php?pengaturan=kategori&aksi=tambah-kategori" <?php if($_GET['pengaturan']=='kategori' AND $_GET['aksi']=='tambah-kategori'){?>class="active"<?php } ?>>Tambah Kategori</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-suitcase fa-fw"></i> Label<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admin.php?pengaturan=penanda" <?php if($_GET['pengaturan']=='penanda'){?>class="active"<?php } ?>>Lihat Label</a>
                            </li>
                            <li>
                                <a href="admin.php?pengaturan=penanda&aksi=tambah-penanda" <?php if($_GET['pengaturan']=='penanda' AND $_GET['aksi']=='tambah-penanda'){?>class="active"<?php } ?>>Tambah Label</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="admin.php?pengaturan=laporan" <?php if($_GET['pengaturan']=='laporan'){?>class="active"<?php } ?>><i class="fa fa-bar-chart-o fa-fw"></i> Laporan Penjualan</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i> Pengaturan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admin.php?pengaturan=toko-online" <?php if($_GET['pengaturan']=='toko-online'){?>class="active"<?php } ?>>Informasi Toko</a>
                            </li>
                            <li>
                                <a href="admin.php?pengaturan=toko-online&aksi=edit-toko&id=1" <?php if($_GET['pengaturan']=='toko-online' AND $_GET['aksi']=='edit-toko'){?>class="active"<?php } ?>>Konfigurasi Toko</a>
                            </li>
                            <li>
                                <a href="admin.php?pengaturan=pengguna&aksi=edit-profil&level=admin" <?php if($_GET['pengaturan']=='pengguna' AND $_GET['aksi']=='edit-profil'){?>class="active"<?php } ?>>Profil Pengguna</a>
                            </li>
                            <li>
                                <a href="admin.php?pengaturan=jejaring-sosial&aksi=edit-akun&id=1" <?php if($_GET['pengaturan']=='jejaring-sosial' AND $_GET['aksi']=='edit-akun'){?>class="active"<?php } ?>>Jejaring Sosial</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

      <?php
      // Konfigurasi URL
      include 'url.php';
      ?>


      <section style="margin:20px 0;clear:both"></section>
      <footer>
        <p style="text-align: right;margin-right: 35px">&copy; Copyright <?php echo date('Y'); ?> <a href="http://www.banten-it.com">Banten IT Solutions</a>. Dibuat Menggunakan <a href="http://www.nurulimam.com/os-cart-toko-online-karya-anak-banten/">OS Cart</a></p>
      </footer>


    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../os-media/theme/admin/js/jquery-1.10.2.js"></script>
    <script src="../os-media/theme/admin/js/bootstrap.min.js"></script>
    <script src="../os-media/theme/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="../os-media/theme/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../os-media/theme/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../os-media/theme/admin/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>
</html>
<?php
}
?>