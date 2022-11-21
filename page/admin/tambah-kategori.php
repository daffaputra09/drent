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
    <title>Tambah Kategori</title>
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
              <td><?php echo $data['nama_user'];?></td>
            </tr>
          </table>
        </div>
        <ul>
          <li><a href="nota.php">Nota</a></li>
          <li><a class="strong" href="kategori.php">Kategori</a></li>
          <li><a href="alat.php">Alat</a></li>
          <li><a href="user.php">User</a></li>

        </ul>
      </div>
      <!--entek e sidebar-->
      <div class="konten-admin">
        <div class="admin">
          <div class="admin-form">
            <h3>Tambah Kategori</h2>
            <table>
                <tr>
                    <td>Kategori</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" id="file" accept="image/*" hidden /> <button class="select-image">Upload Gambar</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="img-area" name="kirim" data-img=""></div></td>
                </tr>
            </table>
            <input type="submit" value="Tambah">
          </div>
      </div>
    </div>
    <script type="text/javascript" src="../../js/admin.js"></script>
  </body>
</html>
