<?php
  session_start();
  unset($_SESSION['username']);
  header('location:index.php');
  session_destroy();
?>