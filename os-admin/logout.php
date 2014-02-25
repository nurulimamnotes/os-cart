<?php
  /** Halaman Logout Administrator **/

  // Menghancurkan Session Lalu Redirect Ke Halaman Login
  session_start();
  session_destroy();
  echo "<script>window.alert('Anda telah berhasil keluar dari sistem administrator');
        window.location=('index.php')</script>";
?>
