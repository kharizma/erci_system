<?php
  /* Check User Script */
  error_reporting (0);
  session_start();  // Start Session

  // Conver to simple variables
  $username = $_POST['username'];
  $pass     = $_POST['password'];
  $op       = $_GET['op'];

  if($username=="" && $pass=="")
  {
    ?>
    <script type="text/javascript">
      alert("Login dan Password Kosong");
      window.location="index.html";
    </script>
    <?php
  }
  if($username=="" && $pass!="")
  {
    ?>
    <script type="text/javascript">
      alert("Login Kosong");
      window.location="index.html";
    </script>
    <?php
  }
  if($username!="" && $pass=="")
  {
    ?>
    <script type="text/javascript">
      alert("Password Kosong");
      window.location="index.html";
    </script>
    <?php
  }
  if($username!="" && $pass=="")
  {
    // Convert password to md5 hash
    $password = md5($pass);
   
    $koneksi = new mysqli("localhost","root","","db_erci");
    //Cek Koneksi
    if ($koneksi->connect_error) {
      die("Koneksi Gagal: " . $koneksi->connect_error);
    }

   
    $sql = "SELECT* FROM user WHERE username = '$username' AND password = '$password'";
    $result = $koneksi->query($sql);

    if ($result->num_rows ==1) {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
          if($op="in")
          {
            if($row['hak_akses']=="administrator")
            {
              $_SESSION['username']   = $row['username'];
              $_SESSION['hak_akses']  = $row['hak_akses'];
              $_SESSION['id_erci']    = $row['id_erci'];
              header("location:homeadm.php?page=home");
            }
          }
        }
    }
    else
    {
      echo "0 results";
    }
  }
  $koneksi->close();
?>