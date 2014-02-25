<?php
session_start();
error_reporting(0);

$sid = session_id();
$sql = mysql_query("SELECT * FROM os_pemesanan, os_produk WHERE os_pemesanan.id_produk=os_produk.id");
?>
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Laporan Penjualan</h1>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> Laporan Penjualan</li>
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
                                        <li><a href="#">Lihat Laporan</a>
                                        </li>
                                        <li><a href="#">Cetak Laporan</a>
                                        </li>
                                        <li><a href="#">Simpan Sebagai PDF</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Sembunyikan Laporan</a>
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
                                    <tbody>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>