<?php
	include "koneksi.php";
	session_start();
	$user 	= $_POST['username'];
	$pass 	= $_POST['password'];

	if(!$user || !$pass){
		echo "Masih ada field yang kosong! Harap isi dengan data valid";
		echo '<br><a href="login.php"> Kembali</a>';
	}
	else{
		$save = mysql_query("SELECT * FROM users WHERE username = '$user' AND password = '$pass'") or die(mysql_error());
		echo "Cek Username dan Password Anda!";
		echo '<br><a href="login.php"> Kembali</a>';
		if($save){
			while($row = mysql_fetch_assoc($save)){
				if($row["status"] == "admin"){
					$_SESSION["fakultas"] = "admin";
					header("Location: cpanel.php");
				}
				else if($row["status"] == "fti"){
					$_SESSION["fakultas"] = "fti";
					header("Location: cpanel_fti.php");
				}
				else if($row["status"] == "fad"){
					$_SESSION["fakultas"] = "fad";
					header("Location: cpanel_fad.php");
				}
				else if($row["status"] == "fk"){
					$_SESSION["fakultas"] = "fk";
					header("Location: cpanel_fk.php");
				}
				else if($row["status"] == "fbio"){
					$_SESSION["fakultas"] = "fbio";
					header("Location: cpanel_fbio.php");
				}
				else if($row["status"] == "fteo"){
					$_SESSION["fakultas"] = "fteo";
					header("Location: cpanel_fteo.php");
				}
				else if($row["status"] == "fbis"){
					$_SESSION["fakultas"] = "fbis";
					header("Location: cpanel_fbis.php");
				}
				else if($row["status"] == "pbi"){
					$_SESSION["fakultas"] = "pbi";
					header("Location: cpanel_pbi.php");
				}
			}
		}
	}
?>