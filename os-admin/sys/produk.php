<?php
session_start();
error_reporting(0);

switch($_GET[aksi]){
  // Menampilkan Produk
  default:
  echo'
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Daftar Produk</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-table"></i> Produk</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Daftar Produk
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Menu
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="?pengaturan=produk&aksi=tambah-produk">Tambah Produk</a>
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
                                          <th>Nama Produk</th>
                                          <th>Kategori</th>
                                          <th>Harga</th>
                                          <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                      $sql = mysql_query("SELECT * FROM os_produk ORDER BY id ASC");
                                      $no = 1;
                                      while ($ambildata=mysql_fetch_array($sql)){
                                        echo"<tr>
                                            <td>$no</td>
                                            <td>$ambildata[nama_produk]</td>
                                            <td>";
                                      $query = mysql_query("SELECT * FROM os_kategori WHERE id = '".$ambildata['id_kategori']."'");
                                      $lht = mysql_fetch_array($query);
                                        echo"$lht[kategori]</td>
                                            <td>$ambildata[harga]</td>
                                            <td><a class='btn btn-outline btn-info' href='?pengaturan=produk&aksi=edit-produk&id=$ambildata[id]'>Edit</a> &nbsp; <a class='btn btn-outline btn-danger' href='aksi.php?pengaturan=produk&aksi=hapus&id=$ambildata[id]'>Hapus</a>
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
  // Menambahkan Produk
  case "tambah-produk":
    echo'
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Tambah Produk</h1>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-table"></i> Tambah Produk</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Tambah Produk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form enctype="multipart/form-data" method="POST" action="aksi.php?pengaturan=produk&aksi=tambah">
                                <table class="table">
                                      <tr>
                                      <td>Nama Barang</td>
                                      <td><input type="text" name="nama_produk" class="form-control" placeholder="Masukkan Nama Produk" style="width:280px" /></td>
                                      </tr>
                                      <tr>
                                      <td>Kategori</td>
                                      <td><select name="id_kategori" class="form-control" style="width:180px">';

                                      $query = mysql_query("SELECT * FROM os_kategori");
                                        while ($lht = mysql_fetch_array($query)){
                                          echo "<option value='$lht[id]''>$lht[kategori]</option>";
                                          }
                                    
                                          echo"</select></td>
                                            </tr>
                                      <tr>
                                      <td>Penanda</td>
                                      <td><select name='id_penanda' class='form-control' style='width:180px'>";

                                      $query = mysql_query("SELECT * FROM os_penanda");
                                        while ($lht = mysql_fetch_array($query)){
                                          echo "<option value='$lht[id]''>$lht[nama_penanda]</option>";
                                          }
                                    
                                          echo"</select></td>
                                            </tr>
                                            <tr>
                                            <td>Harga</td>
                                            <td><div class='form-group input-group'>
                                            <span class='input-group-addon'>Rp</span>
                                            <input type='text' class='form-control' name='harga' style='width:240px' />
                                            </div></td>
                                            </tr>
                                            <tr>
                                            <td>Bintang</td>
                                            <td><input type='text' name='bintang' class='form-control' style='width:280px' /></td>
                                            </tr>
                                            <tr>
                                            <td>Ketersediaan</td>
                                            <td><input type='text' name='stok' class='form-control' style='width:280px' /></td>
                                            </tr>
                                            <tr>
                                            <td>Deskripsi</td>
                                            <td><textarea name='deskripsi' class='form-control' rows='7'></textarea></td>
                                            </tr>
                                            <tr>
                                            <td>Detail</td>
                                            <td><textarea name='detail' class='form-control' rows='17'></textarea></td>
                                            </tr>
                                            <tr>
                                            <td>Gambar</td>
                                            <td><input type='file' name='gambar_produk' size='40'></td>
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
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->';
    break;
  // Edit Produk
  case"edit-produk":
    $edit = mysql_query("SELECT * FROM os_produk WHERE id='$_GET[id]'");
    $dsp = mysql_fetch_array($edit);
    echo"
  
        <div id='page-wrapper'>
            <div class='row'>
            <div class='col-lg-12'>
                            <h1 class='page-header'>Edit Produk</h1>
                            <div class='alert alert-info alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class='breadcrumb'>
              <li><a href='admin.php'><i class='fa fa-home'></i> Dashboard</a></li>
              <li class='active'><i class='fa fa-table'></i> Edit Produk</li>
            </ol>
            </div>
            </div>

            
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-table fa-fw'></i> Edit Produk
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                            <form method='POST' enctype='multipart/form-data' action='aksi.php?pengaturan=produk&aksi=update'>
                                <input type='hidden' name='id' value='$dsp[id]' />
                                <table class='table'>
                                  <tr>
                                  <td>Nama Barang</td>
                                  <td><input type='text' name='nama_produk' value='$dsp[nama_produk]' class='form-control' style='width:280px' /></td>
                                  </tr>
                                  <tr>
                                  <td>Kategori</td>
                                  <td><select name='id_kategori' class='form-control' style='width:180px'>";
                                  $query = mysql_query("SELECT * FROM os_kategori");
                                    while ($tmp = mysql_fetch_array($query)){
                                      if($dsp['id_kategori'] == $tmp['id']) {
                                        echo "<option value='$tmp[id]' selected>$tmp[kategori]</option>";
                                      } else {
                                        echo "<option value='$tmp[id]'>$tmp[kategori]</option>";
                                      }
                                    }
                                    echo"</select></td>
                                      </tr>
                                      <tr>
                                      <td>Penanda</td>
                                  <td><select name='id_penanda' class='form-control' style='width:180px'>";
                                  $query = mysql_query("SELECT * FROM os_penanda");
                                    while ($tmp = mysql_fetch_array($query)){
                                      if($dsp['id_penanda'] == $tmp['id']) {
                                        echo "<option value='$tmp[id]' selected>$tmp[nama_penanda]</option>";
                                      } else {
                                        echo "<option value='$tmp[id]'>$tmp[nama_penanda]</option>";
                                      }
                                    }
                                          echo"</select></td>
                                            </tr>
                                      <tr>
                                      <td>Harga</td>
                                            <td><div class='form-group input-group'>
                                            <span class='input-group-addon'>Rp</span>
                                            <input onfocus=this.value='' value='$dsp[harga]'  type='text' class='form-control' name='harga' style='width:240px' />
                                            </div></td>
                                      </tr>
                                      <tr>
                                      <td>Bintang</td>
                                      <td><input type='text' name='bintang' value='$dsp[bintang]' class='form-control' style='width:280px' /></td>
                                      </tr>
                                      <tr>
                                      <td>Ketersediaan</td>
                                      <td><input type='text' name='stok' value='$dsp[stok]' class='form-control' style='width:280px' /></td>
                                      </tr>
                                      <tr>
                                      <td>Deskripsi</td>
                                      <td><textarea name='deskripsi' class='form-control' rows='7'>$dsp[deskripsi]</textarea></td>
                                      </tr>
                                      <tr>
                                      <td>Detail</td>
                                      <td><textarea name='detail' class='form-control' rows='17'>$dsp[detail]</textarea></td>
                                      </tr>
                                      <tr>
                                      <td></td>
                                      <td><img width='160' height='160' src='../os-media/img/$dsp[gambar]' /></td>
                                      </tr>
                                      <tr>
                                      <td>Gambar</td>
                                      <td><input type='file' id='gambar_produk' name='gambar_produk' size='40' /></td>
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