<?php
    session_start();
    include("koneksi.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Official Humas - Universitas Kristen Duta Wacana</title>

        <!-- ================================== FAVICON ================================= -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- ============================== STYLESHEET - CSS ============================= -->
        <link rel="stylesheet" type="text/css" href="css/styleFakultasBis.css">
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
                <h1>FAKULTAS</h1>
                <h2>UNIVERSITAS KRISTER DUTA WACANA</h2>
                <h3>Mencerdaskan Kehidupan Bangsa</h3>
            </center>
        </div>
    </div>

    <!-- ================================ LINK FAKULTAS ================================= -->
    <div id="wrapper_faculty">
        <div id="faculty">
            <div id="tic_03">
                <h1>FAKULTAS BISNIS</h1>
            </div>
            <div id="wrapper_iklan_01">
                <div id="iklan_01">
                    <center>
                        <br><p>Menjadi Fakultas Ekonomi terpercaya dan berkarakter dengan menerapkan teknologi informasi dalam proses pembelajaran untuk melahirkan generasi kreatif, inovatif dan mandiri dalam dunia pluralistic berdasarkan kasih.</p>
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