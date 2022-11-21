<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['level']);
session_destroy();
echo "<script>alert('Logout Berhasil');window.location='../../index.php';</script>";
?>