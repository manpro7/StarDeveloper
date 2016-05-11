<?php
	session_start();
	include "koneksi.php";
	$target_dir 	= "image/";
	$target_file 	= $target_dir . basename($_FILES["gambar"]["name"]);
	$ok = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

	if(isset($_POST["submit"])){
		$check = getimagesize($_FILES["gambar"]["tmp_name"]);
		if($check != false){
			echo "File adalah gambar - " . $check["mime"] . ".";
			echo '<br><a href="cpanel_fad_addnews.php">Kembali</a>';
			$ok = 1;
		}
		else{
			echo "File bukan gambar";
		}
	}


	if($ok == 0){
		echo "Terjadi kesalahan";
	}else {
		if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)){
			echo "File berhasil diupload";
			//masukkan ke dalam database
			$judul = $_POST["judul"];
			$berita = $_POST["berita"];
			$status = $_SESSION["fakultas"];
			if(!$judul || !$berita){
				echo "Masih ada field yang kosong! Harap isi dengan data valid";
		    	echo '<a href="cpanel_fad_addnews.php"> Kembali</a>';
			}
			else{
				$save = mysql_query("INSERT INTO berita_fad(judul, tanggal, gambar, berita, status) VALUES('$judul', CURDATE(),'$target_file', '$berita','$status')") or die(mysql_error());
				if($save){
					echo "Berita berhasil diupload";
					echo '<a href="cpanel_fad_addnews.php">Kembali</a>';
				}else{
					echo "Proses Gagal";
					echo '<br><a href="cpanel_fad_addnews.php">Kembali</a>';
				}
			}

		}else{
			echo $_FILES["gambar"]["tmp_name"];
			echo '<br><a href="cpanel_fad_addnews.php">Kembali</a>';
		}
	}

?>