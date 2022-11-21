<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['level']);
echo "<script>alert('Logout Berhasil');window.location='../../index.php';</script>";
?>