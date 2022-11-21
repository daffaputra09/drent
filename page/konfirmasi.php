<?php
session_start();

if (isset($_SESSION ['level']) && isset ($_SESSION ['username']))
{
    if ($_SESSION['level'] == "admin") {
        header('location: http://localhost/php/drent/page/admin/index.php');
      } elseif ($_SESSION['level'] == "user") {
        header('location: http://localhost/php/drent/page/user/index.php');
      } else{
        header('location: ../index.php');
      }
}
if (!isset($_SESSION['level']))
{
    echo "<script>alert('Akses Ditolak');window.location='../../index.php';</script>";
}

?>