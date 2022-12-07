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
    <title>Edit Kategori</title>
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
      <?php
      $id_kategori=$_GET['id_kategori'];
      $query="SELECT * FROM tb_kategori WHERE id_kategori='$id_kategori'";
      $hasil=mysqli_query($koneksi, $query);
      $data=mysqli_fetch_array($hasil);
      ?>
      <div class="konten-admin">
        <div class="admin">
          <div class="admin-form">
            <h3>Edit Kategori</h2>
            <form action="proses-edit-kategori.php" method="post" enctype="multipart/form-data">
            <table>11
                <tr>
                    <td>Kategori</td>
                    <td><input type="text" name="kategori" value="<?php echo $data['kategori'];?>" required></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file"  name="foto1" value="<?php echo $data['gambar_kategori'];?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="id_kategori" value="<?php echo $data['id_kategori'];?>" hidden></td>
                </tr>
            </table>
            <input type="submit" value="Simpan">
            </div>
          </div>
      </div>
    </div>
    <script type="text/javascript" src="../../js/admin.js"></script>
  </body>
</html>
