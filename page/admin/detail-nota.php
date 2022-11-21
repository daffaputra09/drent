<?php
session_start();
if ($_SESSION['level']=="user" || $_SESSION['level']==""){
    echo "<script>alert('Akses Ditolak');window.location='../../index.php';</script>";
}   
include "../../koneksi.php";
$query="SELECT * FROM tb_user WHERE username='$_SESSION[username]'";
$hasil=mysqli_query($koneksi, $query);
$data=mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Detail Nota</title>
  </head>
  <body oncontextmenu="return false">
    <!--sidebar-->
    <div class="con-admin">
      <div class="side-bar">
        <img src="../../img/admin.JPG" alt="" />
        <div class="logout">
          <table>
            <tr>
              <td>
                <a href="logout.php"><img src="../../img/logout.svg" alt="" /></a>
              </td>
              <td>Daffa Putra Prasetya</td>
            </tr>
          </table>
        </div>
        <ul>
          <li><a class="strong" href="nota.php">Nota</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a href="alat.php">Alat</a></li>
          <li><a href="user.php">User</a></li>

        </ul>
      </div>
      <!--entek e sidebar-->
      <div class="konten-admin">
        <div class="admin">
          <h1>#19 Daffa Putra Prasetya</h1>
            <h2>2 Hari</h2>
            <div class="denota">
                <table class="tb1">
                  <tr>
                    <th class="th1">Nama Barang</th>
                    <th class="th2">Harga</th>
                    <th class="th3">Jumlah</th>
                    <th class="th4">Total</th>
                  </tr>
                  <tr>
                    <td>Sony Alpha A6000</td>
                    <td class="denota-harga">Rp. 110.000</td>
                    <td class="denota-jumlah">1</td>
                    <td class="denota-harga">Rp. 110.000</td>
                  </tr>
                  <tr>
                    <td>Sony E-Mount 18-105mm</td>
                    <td class="denota-harga">Rp. 80.000</td>
                    <td class="denota-jumlah">1</td>
                    <td class="denota-harga">Rp. 80.000</td>
                  </tr>
                  <tr>
                    <td>Sony E-Mount 50mm</td>
                    <td class="denota-harga">Rp. 60.000</td>
                    <td class="denota-jumlah">1</td>
                    <td class="denota-harga">Rp. 60.000</td>
                  </tr>
                  <tr>
                    <td>Sony FW 50</td>
                    <td class="denota-harga">Rp. 15.000</td>
                    <td class="denota-jumlah">2</td>
                    <td class="denota-harga">Rp. 30.000</td>
                  </tr>
                  <tr>
                    <td>Godox SL150w</td>
                    <td class="denota-harga">Rp. 125.000</td>
                    <td class="denota-jumlah">1</td>
                    <td class="denota-harga">Rp. 125.000</td>
                  </tr>
                  
                  
                </table>
                <table class="total-harga">
                  <tr>
                    <th class="total-harga1">Total Harga</th>
                    <th class="strong">Rp. 810.000</th>
                  </tr>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
