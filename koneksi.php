<?php
  $host     ='localhost';
  $username ='root';
  $password ='';
  $db_name  ='db_erci';
  $koneksi  = mysqli_connect($host,$username,$password);

  if(!$koneksi)
  {
    echo "Gagal Koneksi";
  }
  mysqli_select_db($db_name,$koneksi);
?>