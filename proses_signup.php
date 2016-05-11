<?php
	include "koneksi.php";
	$user 	= $_POST['username'];
	$pass 	= $_POST['password'];
	$status = $_POST['status'];

	if(!$user || !$pass || !$status){
		echo "Masih ada field yang kosong! Harap isi dengan data valid";
    	echo '<a href="cpanel_adduser.php"> Kembali</a>';
	}
	else{
		$save = mysql_query("INSERT INTO users(username, password, status) VALUES('$user', '$pass','$status')") or die(mysql_error());
		if($save){
			echo "Anda Telah Terdaftar, Selamat!";
			echo '<a href="cpanel_adduser.php">Kembali</a>';
		}else{
			echo "Proses Gagal";
			echo '<br><a href="cpanel_adduser.php">Kembali</a>';
		}
	}
?>