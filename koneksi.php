<?php
  $server   = "localhost";
  $user     = "root";
  $password = "";

  $exe = mysql_connect($server,$user,$password);

  if(!$exe)
  {
    die('Tidak dapat koneksi: ' . mysql_error());
  }
  echo "Koneksi Berhasil";
  mysql_close($exe);
 ?>
