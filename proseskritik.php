<?php
  include("koneksi.php");
  $subject = $_POST['subject'];
  $pesan = $_POST['pesan'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $nomor = $_POST['nomor'];

  if(!$subject || !$pesan || !$nama || !$email || !$nomor)
  {
     echo "Masih ada data yang kosong! Harap isi dengan data valid";
     echo '<a href="kontak.php"> Kembali</a>';
  }
  else
  {
     $simpan = mysql_query("INSERT INTO kritik(id_kritik,subject,pesan,nama,email,nomor)
      VALUES('','$subject','$pesan','$nama','$email','$nomor')");
     if($simpan) {
       echo 'Kritik dan Saran Telah Diterima!, Terima Kasih<a href="kontak.php"> Kembali</a>';
     } else {
       echo "Proses Gagal!";
     }
   }
?>