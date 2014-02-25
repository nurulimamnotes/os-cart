<?php
session_start();
error_reporting(0);

switch($_GET[aksi]){
  // Tampil Kategori
  default:
    $sql = mysql_query("SELECT * FROM os_pengaturan ORDER BY id ASC");
    $ambildata=mysql_fetch_array($sql);
  echo '
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                            <h1 class="page-header">Pengaturan Toko Online</h1>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-cog"></i> Pengaturan</li>
            </ol>
            </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-cog fa-fw"></i> Informasi Toko
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Menu
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="admin.php?pengaturan=toko-online&aksi=edit-toko&id=1">Edit Toko</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th>Nama Toko</th>
                                          <th>';
                                          echo $ambildata[nama_toko];
                                          echo '</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <td>Deskripsi</td>
                                      <td>';
                                          echo $ambildata[desk_toko];
                                          echo '</td>
                                    </tr>
                                    <tr>
                                      <td>Alamat</td>
                                      <td>';
                                          echo $ambildata[alamat_toko];
                                          echo '</td>
                                    </tr>
                                    <tr>
                                      <td>Email</td>
                                      <td>';
                                          echo $ambildata[email_toko];
                                          echo '</td>
                                    </tr>
                                    <tr>
                                      <td>Website</td>
                                      <td>';
                                          echo $ambildata[url_toko];
                                          echo '</td>
                                    </tr>
                                    <tr>
                                      <td>Telpon</td>
                                      <td>';
                                          echo $ambildata[telp_toko];
                                          echo '</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>';
  break;
  // Edit Toko Online
  case"edit-toko":
  $edit = mysql_query("SELECT * FROM os_pengaturan WHERE id='$_GET[id]'");
  $ambildata = mysql_fetch_array($edit);

    echo"
        <div id='page-wrapper'>
            <div class='row'>
            <div class='col-lg-12'>
                            <h1 class='page-header'>Edit Toko</h1>
                            <div class='alert alert-info alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class='breadcrumb'>
              <li><a href='admin.php'><i class='fa fa-home'></i> Dashboard</a></li>
              <li class='active'><i class='fa fa-cog'></i> Edit Toko</li>
            </ol>
            </div>
            </div>

            
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-cog fa-fw'></i> Edit Toko
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                            <form method='POST' enctype='multipart/form-data' action='aksi.php?pengaturan=toko-online&aksi=update'>
                                <input type='hidden' name='id' value='$ambildata[id]'>
                                <table class='table'>
                                  <tr>
                                  <td>Nama Toko</td>
                                  <td><input type='text' name='nama_toko' style='width:280px' value='$ambildata[nama_toko]' class='form-control'></td>
                                  </tr>
                                  <tr>
                                  <td>Deskripsi Toko</td>
                                  <td><textarea name='desk_toko' rows='5' class='form-control'>$ambildata[desk_toko]</textarea></td>
                                      </tr>
                                  <tr>
                                  <td>Alamat Toko</td>
                                  <td><textarea name='alamat_toko' rows='5' class='form-control'>$ambildata[alamat_toko]</textarea></td>
                                      </tr>
                                  <tr>
                                  <td>Email</td>
                                  <td><input type='text' name='email_toko' style='width:280px' class='form-control' value='$ambildata[email_toko]'></td>
                                  </tr>
                                  <tr>
                                  <td>Website</td>
                                  <td><input type='text' name='url_toko' style='width:280px' class='form-control' value='$ambildata[url_toko]'></td>
                                  </tr>
                                  <tr>
                                  <td>Telpon</td>
                                  <td><input type='text' name='telp_toko' style='width:280px' class='form-control' value='$ambildata[telp_toko]'></td>
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
  // Edit Social Media
  case"edit-akun":
  $edit = mysql_query("SELECT * FROM os_pengaturan WHERE id='$_GET[id]'");
  $ambildata = mysql_fetch_array($edit);
    echo"
        <div id='page-wrapper'>
            <div class='row'>
            <div class='col-lg-12'>
                            <h1 class='page-header'>Akun Jejaring Sosial</h1>
                            <div class='alert alert-info alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class='breadcrumb'>
              <li><a href='admin.php'><i class='fa fa-home'></i> Dashboard</a></li>
              <li class='active'><i class='fa fa-th-large'></i> Akun Jejaring Sosial</li>
            </ol>
            </div>
            </div>

            
            <div class='row'>
                <div class='col-lg-6'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-cog fa-fw'></i> Akun Jejaring Sosial
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                            <form method='POST' enctype='multipart/form-data' action='aksi.php?pengaturan=jejaring-sosial&aksi=update'>
                                <input type='hidden' name='id' value='$ambildata[id]'>
                                <table class='table'>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-facebook-square fa-fw'></i></span>
                                  <input class='form-control' type='text' placeholder='Facebook' name='akun_fb' value='$ambildata[akun_fb]'></td>
                                  </div>
                                  </tr>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-twitter-square fa-fw'></i></span>
                                  <input class='form-control' type='text' placeholder='Twitter' name='akun_tw' value='$ambildata[akun_tw]'></td>
                                  </div>
                                  </tr>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-github-square fa-fw'></i></span>
                                  <input class='form-control' type='text' placeholder='Github' name='akun_gh' value='$ambildata[akun_gh]'></td>
                                  </div>
                                  </tr>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-youtube-square fa-fw'></i></span>
                                  <input class='form-control' type='text' placeholder='Youtube' name='akun_yt' value='$ambildata[akun_yt]'></td>
                                  </div>
                                  </tr>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-linkedin-square fa-fw'></i></span>
                                  <input class='form-control' type='text' placeholder='LinkedIn' name='akun_li' value='$ambildata[akun_li]'></td>
                                  </div>
                                  </tr>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-rss-square fa-fw'></i></span>
                                  <input class='form-control' type='text' placeholder='Blog' name='akun_bg' value='$ambildata[akun_bg]'></td>
                                  </div>
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
  // Edit Profil Pengguna
  case"edit-profil":
  $edit = mysql_query("SELECT * FROM os_user WHERE level='$_GET[level]'");
  $ambildata = mysql_fetch_array($edit);
    echo"
        <div id='page-wrapper'>
            <div class='row'>
            <div class='col-lg-12'>
                            <h1 class='page-header'>Profil Pengguna</h1>
                            <div class='alert alert-info alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Terimakasih sudah menggunakan OS Cart sebagai CMS Toko Online anda.
                            </div>
            <ol class='breadcrumb'>
              <li><a href='admin.php'><i class='fa fa-home'></i> Dashboard</a></li>
              <li class='active'><i class='fa fa-user'></i> Profil Pengguna</li>
            </ol>
            </div>
            </div>

            
            <div class='row'>
                <div class='col-lg-6'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-user fa-fw'></i> Edit Profil Pengguna
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                            <form method='POST' enctype='multipart/form-data' action='aksi.php?pengaturan=pengguna&aksi=update'>
                                <input type='hidden' name='id' value='$ambildata[level]'>
                                <table class='table'>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-user fa-fw'></i></span>
                                  <input class='form-control' type='text' placeholder='Pengguna' name='pengguna' value='$ambildata[id_user]'></td>
                                  </div>
                                  </tr>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-envelope-o fa-fw'></i></span>
                                  <input class='form-control' type='email' placeholder='Email' name='email' value='$ambildata[email]'></td>
                                  </div>
                                  </tr>
                                  <tr>
                                  <td>
                                  <div class='input-group'>
                                  <span class='input-group-addon'><i class='fa fa-key fa-fw'></i></span>
                                  <input class='form-control' type='password' placeholder='Masukkan Password Baru' name='password'></td>
                                  </div>
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
  // Info Server
  case"server":
ob_start();
phpinfo();
preg_match ('%<style type="text/css">(.*?)</style>.*?(<body>.*</body>)%s', ob_get_clean(), $matches);
echo "<div class='phpinfodisplay'><style type='text/css'>\n",
    join( "\n",
        array_map(
            create_function(
                '$i',
                'return ".phpinfodisplay " . preg_replace( "/,/", ",.phpinfodisplay ", $i );'
                ),
            preg_split( '/\n/', $matches[1] )
            )
        ),
    "</style>\n",
    $matches[2],
    "\n</div>\n";
}
?>