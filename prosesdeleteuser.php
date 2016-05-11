<?php 
	include("koneksi.php");  
	$id=$_GET['id']; 
    $delete="DELETE FROM users WHERE id='$id'"; 
    mysql_query($delete) or die ("Data Tidak Dapat Dihapus! Cek Ulang"); 
   	
	echo "<center><h3>User berhasil di hapus</h3> Kembali <a href='cpanel_deleteuser.php'> Back</a></center>";    
?>