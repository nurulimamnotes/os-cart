<?php
session_start();
error_reporting(0);

switch($_GET[aksi]){
  // Tampilkan Label
  default:
    echo'<div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Daftar Label</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-book"></i> Lihat Label</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-tags fa-fw"></i> Daftar Label
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Menu
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="?pengaturan=penanda&aksi=tambah-penanda">Tambah Label</a>
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
                                          <th>No</th>
                                          <th>Nama Label</th>
                                          <th>Deskripsi</th>
                                          <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                      $sql = mysql_query("SELECT * FROM os_penanda ORDER BY id ASC");
                                      $no = 1;
                                      while ($ambildata=mysql_fetch_array($sql)){
                                        echo"<tr>
                                            <td>$no</td>
                                            <td>$ambildata[nama_penanda]</td>
                                            <td>$ambildata[desk_penanda]</td>
                                            <td><a class='btn btn-outline btn-info' href='?pengaturan=penanda&aksi=edit-penanda&id=$ambildata[id]'>Edit</a> &nbsp; <a class='btn btn-outline btn-danger' href='aksi.php?pengaturan=penanda&aksi=hapus&id=$ambildata[id]'>Hapus</a>
                                            </td>
                                            </tr>";
                                        $no++;
                                      }
                                    echo '</tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->';
  break;
  // Tambah Label
  case "tambah-penanda":
    echo'<div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Tambah Label</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-book"></i> Tambah Label</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-tags fa-fw"></i> Tambah Label
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form enctype="multipart/form-data" method="POST" action="aksi.php?pengaturan=penanda&aksi=tambah">
                                <table class="table">
                                      <tr>
                                      <td>Nama Label</td>
                                      <td><input type="text" name="nama_penanda" placeholder="Masukkan Nama Label" class="form-control" style="width:280px" /></td>
                                      </tr>
                                      <tr>
                                      <td>Deskripsi</td>
                                      <td><textarea name="desk_penanda" rows="7" class="form-control"></textarea></td>
                                      </tr>
                                      </table>
                                            <input type="submit" class="btn btn-outline btn-info" name="submit" value="Simpan" />
                                            <input type="button" class="btn btn-outline btn-danger" value="Batal" onClick=self.history.back()>
                                            </form>
                                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->';
  break;
  // Edit Label
  case"edit-penanda":
  $edit = mysql_query("SELECT * FROM os_penanda WHERE id='$_GET[id]'");
  $ambildata = mysql_fetch_array($edit);
    echo'<div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Edit Label</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-book"></i> Edit Label</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-tags fa-fw"></i> Edit Label
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form enctype="multipart/form-data" method="POST" action="aksi.php?pengaturan=kategori&aksi=update">
                            <input type="hidden" name="id" value="';
                                      echo $ambildata[id];
                                      echo '" />
                                <table class="table">
                                      <tr>
                                      <td>Nama Label</td>
                                      <td><input type="text" name="nama_penanda" value="';
                                      echo $ambildata[nama_penanda];
                                      echo '" class="form-control" style="width:180px" /></td>
                                      </tr>
                                      <tr>
                                      <td>Deskripsi</td>
                                      <td><textarea name="desk_penanda" class="form-control" rows="7">';
                                      echo $ambildata[desk_penanda];
                                      echo '</textarea></td>
                                            </tr>
                                            <tr>
                                            <td colspan="2"></td>
                                            </tr>
                                            </table>
                                            <input type="submit" class="btn btn-outline btn-info" name="submit" value="Simpan" />
                                            <input type="button" class="btn btn-outline btn-danger" value="Batal" onClick=self.history.back()>
                                            </form>
                                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->';
  break;
}
?>