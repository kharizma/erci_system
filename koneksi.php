<?php
  $server   = "localhost";
  $user     = "root";
  $password = "";
  $db_name  = "db_erci";

  $exe = mysql_connect($server,$user,$password,$db_name) or die("Gagal Koneksi".mysql_error());

  mysql_select_db($db_name,$exe) or die("Gagal Koneksi ke Database".mysql_error());

  if($exe)
  {
    echo "Koneksi Berhasil";
  }
  mysql_close($exe);
 ?>
