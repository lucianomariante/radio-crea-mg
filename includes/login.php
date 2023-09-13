<?php  session_start();
if ($_SESSION['entrar']!='correto') { header("location:../index.php?status=erro"); exit(); } 
?>