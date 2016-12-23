<?php
	include "koneksi.php";

	if($_GET['page']=='home')
	{
		echo "<h2>SELAMAT DATANG</h2>
				<p><div id=tahoma>Hai, <b>$_SESSION[username]</b>, <br/><br/>Selamat Datang di halaman Aplikasi Keanggotaan Ertiga Club Indonesia</div></p>
		";
	}
?>