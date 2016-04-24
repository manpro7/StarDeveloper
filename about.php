<?php
	session_start();
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Official Humas - Tentang Humas dan Admisi - Universitas Kristen Duta Wacana</title>

		<!-- ================================== FAVICON ================================= -->
    	<link rel="shortcut icon" href="images/favicon.png">

    	<!-- ============================== STYLESHEET - CSS ============================= -->
		<link rel="stylesheet" type="text/css" href="css/styleAbout.css">
		<link rel="stylesheet" type="text/css" href="css/social.css">
		
		<!-- =========================== JAVASCRIPT (Database) =========================== -->
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
		
		<!-- =============================== WEB RESPONSIVE =============================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- ================================= META DATA ==================================== -->
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <meta http-equiv="Content-Language" content="id/en">
	    <meta name="description" content="Information Website of HUMAS UKDW">
	    <meta name="keywords" content="humas ukdw, ukdw, official humas, universitas kristen duta wacana">
	    <meta name="author" content="Project Management 7">
	    <meta name="copyright" content="&copy; C.A.D Design Project">
	    <meta property="og:title" content="Official Humas UKDW">
	    <meta property="og:type" content="website">
	    <meta property="fb/twitter:admins" content="@chrisady9902">
	</head>
	<body>
	<!-- ================================= HEADER ==================================== -->
	<div id="stay-desktop">
	<div id="wrapper_header">
		<div id="header">
			<div id="wrapper_menu_01">
				<a href="index.php">
					<div class="menu_01">
						<h1>BERANDA</h1>
					</div>
				</a>
			</div>
			<div id="wrapper_menu_02">
				<a href="pmb.php">
					<div class="menu_02">
						<h1>PMB UKDW</h1>
					</div>
				</a>
			</div>
			<div id="wrapper_menu_03">
				<a href="fakultas.php">
					<div class="menu_03">
						<h1>FAKULTAS</h1>
					</div>
				</a>
			</div>
			<div id="wrapper_menu_04">
				<a href="kontak.php">
					<div class="menu_04">
						<h1>KONTAK</h1>
					</div>
				</a>
			</div>
			<div id="wrapper_menu_05">
				<a href="about.php">
					<div class="menu_05">
						<h1>ABOUT</h1>
					</div>
				</a>
			</div>
			<div id="wrapper_menu_06">
				<a href="login.php">
					<div class="menu_06">
						<h1>LOGIN</h1>
					</div>
				</a>
			</div>
			<center>
				<div id="wrapper_logo">
					<a href="index.php"><img src="images/header.png" alt="Not Found"/></a>
				</div>
			</center>
		</div>
	</div>
	</div>
	<script type="text/javascript">
		jQuery("document").ready(function($){
      	var nav = $('#stay-desktop');
      	var pos = nav.offset().top;
      
      
      	$(window).scroll(function () {
        var fix = ($(this).scrollTop() > pos) ? true : false;
        
        nav.toggleClass("fix-nav", fix);
       	$('body').toggleClass("fix-body", fix);
          });});
  	</script>

  	<!-- ========================== SIDE BAR - SOCIAL MEDIA =========================== -->
	<div class='social-buttons button-right hidden-phone hidden-tablet'>
		<a class='itemsocial' href='http://www.facebook.com/DutaWacana' id='facebook-btn' target='_blank'><span class='social-icon'><span class='social-text'>Follow via Facebook</span></span></a>
		<a class='itemsocial' href='http://www.twitter.com/UKDW' id='twitter-btn' target='_blank'><span class='social-icon'><span class='social-text'>Follow via Twitter</span></span></a>
		<a class='itemsocial' href='http://www.youtube.com/UKDWChannel' id='youtube-btn' target='_blank'><span class='social-icon'><span class='social-text'>Follow via Youtube</span></span></a>
		<a class='itemsocial' href='http://ukdw.ac.id/feed/post' id='rss-btn' target='_blank'><span class='social-icon'><span class='social-text'>Follow via RSS</span></span></a>
	</div>
	<script>
    $(window).load(function(){
        $(&#39;.social-buttons .social-icon&#39;).mouseenter(function(){
            $(this).stop();
            $(this).animate({width:&#39;160&#39;}, 500, &#39;easeOutBounce&#39;,function(){}); 
        });
        $(&#39;.social-buttons .social-icon&#39;).mouseleave(function(){
            $(this).stop();
            $(this).animate({width:&#39;43&#39;}, 500, &#39;easeOutBounce&#39;,function(){});
        });
    });
	</script>

	<!-- =================================== TITLE ====================================== -->
	<div id="wrapper_header_title">
		<div id="header_title">
			<center>
				<h1>TENTANG</h1>
				<h2>HUMAS DAN ADMISI UNIVERSITAS KRISTEN DUTA WACANA</h2>
				<h3>Sejarah dan Prestasi</h3>
			</center>
		</div>
	</div>

	<!-- ================================= SECTION ===================================== -->
	<div id="wrapper_section">
		<div id="section">
			<div id="tic_01">
				<h1>SEJARAH</h1>
			</div>
			<div id="wrapper_iklan_01">
				<div id="iklan_01">
					<center>
						<br><p>Pada tahun pertama 1985 dibuka Fakultas Ekonomi Jurusan manajemen dan Fakultas Teknik Jurusan Arsitektur. Tahun berikutnya 1986 dibuka satu jurusan lagi pada Fakultas Teknik yaitu Jurusan Teknik Informatika. Pada tahun 1987 didirikan pula Fakultas Biologi Jurusan Biologi Lingkungan. Pada tahun 1991 UKDW membuka program Pasca Sarjana Theologia. Pada tahun 2000, Fakultas Ekonomi membuka Jurusan Akuntansi. Pada tahun 2005 UKDW membuka Prodi Sistem Informasi dan Prodi Desain Produk. UKDW membuka Prodi Kedokteran pada tahun 2009.</p>
					</center>
				</div>
			</div>
		</div>
	</div>

	<!-- ================================= SECTION ===================================== -->
	<div id="wrapper_section_02">
		<div id="section_02">
			<div id="tic_01">
				<h1>PRESTASI</h1>
			</div>
			<div id="wrapper_iklan_02">
				<div id="iklan_02">
					<center>
						<br><p>1. Salah satu Universitas Terpopuler se-Indonesia pilihan Perusahaan Jabotabek (2007)</p>
						<br><p>2. Peringkat 89 Perguruan Tinggi Terbaik se-Asia Tenggara (2007)</p>
						<br><p>3. Tempat Uji Kompetensi - Lembaga Setifikasi Profesi TI-Telematika terbaik di Indonesia (2008)</p>
						<br><p>4. Peringkat 11 Universitas Terbaik di Indonesia (2009)</p>
						<br><p>5. 8 Universitas terbaik di Daerah Istimewa Yogyakarta (2009)</p>
						<br><p>6. Salah satu dari lima Universitas di DIY yang masuk dalam kategori Service Learning for World Class University (2009)</p>
						<br><p>7. 30 Universitas terbaik di bidang kewirausahaan di Jawa Tengah - DIY (2010)</p>
						<br><p>8. Telkom Smart Campus Award TeSCA (2011)</p>
						<br><p>9. Peringkat 5617 Top University Web Rangking (4icu.org 2012)</p>
						<br><p>10. Peringkat 3673 Top Universities in the World (Webometrics, January 2012)</p>
					</center>
				</div>
			</div>
		</div>
	</div>

	<!-- ================================= COPYRIGHT ==================================== -->
	<div id="wrapper_bottom">
		<center>
		<div id="bottom">
			<h1>&copy; COPYRIGHT 2016 - PROJECT MANAGEMENT 7 - STARDEV</h1>
			<h2>UNIVERSITAS KRISTEN DUTA WACANA</h2>
		</div>
		</center>
	</div>
	</body>
</html>