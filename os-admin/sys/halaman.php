<?php
session_start();
error_reporting(0);

switch($_GET[aksi]){
  // Menampilkan Halaman
  default:
  echo'
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Daftar Halaman</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-table"></i> Halaman</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Daftar Halaman
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Menu
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="?pengaturan=halaman&aksi=tambah-halaman">Tambah Halaman</a>
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
                                          <th>Judul Halaman</th>
                                          <th>Artikel</th>
                                          <th>Link</th>
                                          <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                      $sql = mysql_query("SELECT * FROM os_halaman ORDER BY id ASC");
                                      $no = 1;
                                      while ($ambildata=mysql_fetch_array($sql)){
                                        echo"<tr>
                                            <td>$no</td>
                                            <td>$ambildata[judul]</td>
                                            <td>$ambildata[artikel]</td>
                                            <td>$ambildata[link]</td>
                                            <td><a class='btn btn-outline btn-info' href='?pengaturan=halaman&aksi=edit-halaman&id=$ambildata[id]'>Edit</a> &nbsp; <a class='btn btn-outline btn-danger' href='aksi.php?pengaturan=halaman&aksi=hapus&id=$ambildata[id]'>Hapus</a>
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
  // Menambahkan Halaman
  case "tambah-halaman":
    echo'
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Tambah Halaman</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-table"></i> Tambah Halaman</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Tambah Halaman
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form enctype="multipart/form-data" method="POST" action="aksi.php?pengaturan=halaman&aksi=tambah">
                                <table class="table">
                                      <tr>
                                      <td>Judul Halaman</td>
                                      <td><input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Halaman" style="width:280px" /></td>
                                      </tr>
                                      <tr>
                                      <td>Link Halaman</td>
                                      <td><input type="text" name="link" class="form-control" placeholder="Masukkan Link Halaman" style="width:280px" /></td>
                                      </tr>';
                                          echo"
                                            <tr>
                                            <td>Artikel</td>
                                            <td><textarea name='artikel' class='form-control' rows='17'></textarea></td>
                                            </tr>
                                            <tr>
                                            <td colspan='2'></td>
                                            </tr>
                                            </table>
                                            <input type='submit' class='btn btn-outline btn-info' name='submit' value='Simpan' />
                                            <input type='button' class='btn btn-outline btn-danger' value='Batal' onClick=self.history.back()>
                                            </form>";
                    echo ' </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    break;
  // Edit halaman
  case"edit-halaman":
    $edit = mysql_query("SELECT * FROM os_halaman WHERE id='$_GET[id]'");
    $dsp = mysql_fetch_array($edit);
    echo"
  
        <div id='page-wrapper'>
            <div class='row'>
            <div class='col-lg-12'>
                            <h1 class='page-header'>Edit Halaman</h1>
                            <div class='alert alert-info alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class='breadcrumb'>
              <li><a href='admin.php'><i class='fa fa-home'></i> Dashboard</a></li>
              <li class='active'><i class='fa fa-table'></i> Edit Halaman</li>
            </ol>
            </div>
            </div>

            
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-table fa-fw'></i> Edit Halaman
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                            <form method='POST' enctype='multipart/form-data' action='aksi.php?pengaturan=halaman&aksi=update'>
                                <input type='hidden' name='id' value='$dsp[id]' />
                                <table class='table'>
                                  <tr>
                                  <td>Judul Halaman</td>
                                  <td><input type='text' name='judul' value='$dsp[judul]' class='form-control' style='width:280px' /></td>
                                  </tr>
                                  <tr>
                                  <td>Link Halaman</td>
                                  <td><input type='text' id='disabledInput' name='link' value='$dsp[link]' class='form-control' style='width:280px' disabled/></td>";
                                    echo"
                                      </tr>
                                      <tr>
                                      <td>Artikel</td>
                                      <td><textarea name='artikel' class='form-control' rows='17'>$dsp[artikel]</textarea></td>
                                      </tr>
                                      <tr>
                                      <td colspan=2>
                                      </td>
                                      </tr>
                                      </table>
                                        <input type='submit' class='btn btn-outline btn-info' name='submit' value='Simpan' />
                                        <input type='button' class='btn btn-outline btn-danger' value='Batal' onClick=self.history.back()>
                            </form>";
                    echo ' </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    break;
}
?>