<?php
/* Check User Script */
error_reporting (1);
session_start();  // Start Session
include "koneksi.php";
// Conver to simple variables
$username = $_POST['UserName'];
$password = $_POST['Passwod'];


// Convert password to md5 hash
$password = md5($password);

// check if the user info validates the db
$sql = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
$login_check = mysql_num_rows($sql);

if($login_check > 0){
    while($hasil = mysql_fetch_array($sql)){
    
        // Register some session variables!
        $_SESSION['username'] = $hasil ['username'];
		    $_SESSION['password'] = $hasil ['password'];
        $_SESSION['hak_akses'] = $hasil ['hak_akses'];
    		$_SESSION['id_erci'] = $hasil ['id_erci'];
		
        if ($hasil['hak_akses'] == "Administrator"){
        echo "<script>
          location.href='administrator/index.html'
        </script>";
        }
        if ($hasil['hak_akses'] == "Pengurus"){
        echo "<script>
          location.href='pengurus/index.html'
        </script>";
        }
        if ($hasil['hak_akses'] == "Member"){
        echo "<script>
          location.href='pengurus/index.html'
        </script>";
        }
        if ($hasil['hak_akses'] == "Member"){
        echo "<script>
          location.href='pengurus/index.html'
        </script>";
        }
    }
}
else
{
echo "
	<script language='javascript'>
	alert ('User atau Password Salah');
	location.href='index.erci';
</script>";
}
?>