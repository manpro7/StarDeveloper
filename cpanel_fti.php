<?php
	session_start();
	include("koneksi.php");
	if(!isset($_SESSION["fakultas"])){
	    header("Location: error.php");                 
	}else if($_SESSION["fakultas"] != "fti"){
	    header("Location: error.php");                 
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Official Humas - CPanel Admin Fakultas Teknologi Informasi</title>

        <!-- ================================== FAVICON ================================= -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- ============================== STYLESHEET - CSS ============================= -->
        <link rel="stylesheet" type="text/css" href="css/styleCpanelFAD.css">
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
    <div id="wrapper_header">
        <div id="header">
            <h1 id="changeText">Selamat Datang, ADMIN FAKULTAS TEKNOLOGI INFORMASI</h1>
            <script type="text/javascript">
                var text = ["Halaman Control Panel Admin Fakultas", "Selamat Datang, ADMIN FAKULTAS TEKNOLOGI INFORMASI"];
                var counter = 0;
                var lmn = document.getElementById("changeText");
                setInterval(function(){
                    $("#changeText").fadeOut();
                    lmn.innerHTML = text[counter];
                    $("#changeText").fadeIn();
                    counter++;
                    if(counter >= text.length){
                        counter = 0;
                    }
                }, 5000);
            </script>
            <div id="exit">
                <a href="logout.php"><img name="pic" src="images/exit.png" alt="not found"/></a>
            </div>
        </div>
    </div>

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

    <div id="wrapper_section">
    	<div id="section">
    		<div id="pn">
                <h1>MANAJEMEN INFORMASI</h1><hr>
            </div>
            <div id="wrapper_control_01">
                <a href="cpanel_fti_addnews.php">
                    <div id="control_01">
                        <h2>ADD NEWS FAKULTAS TEKNOLOGI INFORMASI</h2>
                    </div>
                </a>
            </div>
        <!-- ==   <div id="wrapper_control_02">
                <a href="cpanel_fad_viewnews.php">
                    <div id="control_02">
                        <h2>VIEW NEWS FAKULTAS ARSITEKTUR DAN DESAIN</h2>
                    </div>
                </a>
            </div> ==== -->
    	</div>
    </div>
    </body>
</html>