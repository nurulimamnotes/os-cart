<?php
session_start();
error_reporting(0);

$sid = session_id();
$sql = mysql_query("SELECT * FROM os_pemesanan, os_produk WHERE os_pemesanan.id_produk=os_produk.id");
echo '
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-home"></i> Dashboard</a></li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Laporan Penjualan
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Menu
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-th-list fa-fw"></i> Lihat Laporan</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-print fa-fw"></i> Cetak Laporan</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-file-text fa-fw"></i> Simpan Sebagai PDF</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-angle-double-down fa-fw"></i> Sembunyikan Laporan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                          <th>Nama Produk</th>
                                          <th>Nama Pemesan</th>
                                          <th>Alamat Pemesan</th>
                                          <th>Jumlah</th>
                                          <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    ?>
                                    <?php
                                    while ($ambildata=mysql_fetch_array($sql)){
                                      echo"<tr>
                                          <td>$ambildata[nama_produk]</td>
                                          <td>$ambildata[nama_pemesan]</td>
                                          <td>$ambildata[alamat_pemesan] - $ambildata[hp_pemesan]</td>
                                          <td>$ambildata[jumlah_pesanan]</td>
                                          <td>$ambildata[status_pemesanan]</td>
                                         </tr>";
                                    } ?>
                                    <?php
                                    echo '</tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Produk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                          <th>Nama Produk</th>
                                          <th>Kategori</th>
                                          <th>Harga</th>
                                          <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                                          $sql = mysql_query("SELECT * FROM os_produk ORDER BY id DESC LIMIT 3");
                                          while ($ambildata=mysql_fetch_array($sql)){
                                            echo"<tr>
                                                <td>$ambildata[nama_produk]</td>
                                                <td>";
                                      $query = mysql_query("SELECT * FROM os_kategori WHERE id = '".$ambildata['id_kategori']."'");
                                      $lht = mysql_fetch_array($query);
                                            echo"$lht[kategori]</td>
                                                <td>$ambildata[harga]</td>
                                                <td><a href='?pengaturan=produk&aksi=edit-produk&id=$ambildata[id]'><i class='fa fa-pencil-square-o fa-fw'></i> Edit</a> &nbsp; <a href='aksi.php?pengaturan=produk&aksi=hapus&id=$ambildata[id]'><i class='fa fa-trash-o fa-fw'></i> Hapus</a>
                                                </td>
                                                </tr>";
                                          }
                                    echo '</tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-tags fa-fw"></i> Kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    $sql = mysql_query("SELECT * FROM os_kategori ORDER BY id DESC LIMIT 3");
                                        $no = 1;
                                        while ($ambildata=mysql_fetch_array($sql)){
                                          echo"<tr>
                                            <td>$no</td>
                                            <td>$ambildata[kategori]</td>
                                            <td><a href='?pengaturan=kategori&aksi=edit-kategori&id=$ambildata[id]'><i class='fa fa-pencil-square-o fa-fw'></i> Edit</a> &nbsp; <a href='aksi.php?pengaturan=kategori&aksi=hapus&id=$ambildata[id]'><i class='fa fa-trash-o fa-fw'></i> Hapus</a>
                                            </td>
                                            </tr>";
                                          $no++;
                                        }
                                    echo '    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-th-large fa-fw"></i> OS Cart
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="http://www.nurulimam.com/os-cart-toko-online-karya-anak-banten/" class="list-group-item">
                                    <i class="fa fa-refresh fa-fw"></i> Perbarui Sistem OS Cart
                                </a>
                                <a href="http://www.nurulimam.com/" class="list-group-item">
                                    <i class="fa fa-book fa-fw"></i> Petunjuk Sistem OS Cart
                                </a>
                                <a href="admin.php?pengaturan=info&aksi=server" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Informasi Web Server
                                </a>
                                <a href="http://www.nurulimam.com/" class="list-group-item">
                                    <i class="fa fa-coffee fa-fw"></i> Kursus JavaScript Gratis
                                </a>
                                <a href="http://www.nurulimam.com/" class="list-group-item">
                                    <i class="fa fa-laptop fa-fw"></i> Kursus PHP & MySQL
                                </a>
                                <a href="http://www.nurulimam.com/" class="list-group-item">
                                    <i class="fa fa-css3 fa-fw"></i> Kursus HTML5 & CSS3
                                </a>
                                <a href="http://www.nurulimam.com/" class="list-group-item">
                                    <i class="fa fa-html5 fa-fw"></i> Template Website Gratis
                                </a>
                                <a href="http://www.banten-it.com" class="list-group-item">
                                    <i class="fa fa-suitcase fa-fw"></i> Banten IT Solutions
                                </a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Cari produk disini..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Cari
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->
';
?>