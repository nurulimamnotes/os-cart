<?php
  error_reporting(0);
  session_start();
  include "os.php";
  $sid = session_id();
  $sql = mysql_query("SELECT * FROM os_keranjang");
  $row = mysql_num_rows($sql);
  $jml = mysql_fetch_array($sql);
?>