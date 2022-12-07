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
    <title>Edit Alat</title>
    <style>
      .admin-form input[type='submit'] {
      margin-bottom: 40px;
      }
    </style>
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
          <li><a href="nota.php">Nota</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a class="strong" href="alat.php">Alat</a></li>
          <li><a href="user.php">User</a></li>

        </ul>
      </div>
      <!--entek e sidebar-->
      <?php
      $id_alat=$_GET['id_alat'];
      $query="SELECT * FROM tb_alat WHERE id_alat='$id_alat'";
      $hasil=mysqli_query($koneksi, $query);
      $data=mysqli_fetch_array($hasil);
      ?>
      <div class="konten-admin">
        <div class="admin">
          <div class="admin-form">
            <h3>Edit Alat</h2>
            <form action="proses-edit-alat.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td class="kiri-form" >Nama</td>
                    <td colspan="2"><input type="text" name="nama_alat" value="<?php echo $data['nama_alat'];?>" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td colspan="2"><input type="number" name="harga_alat" value="<?php echo $data['harga_alat'];?>"  required></td>
                </tr>
                <tr>
                  <td>Stok Alat</td>
                  <td colspan="2"><input type="number" name="stok_alat" value="<?php echo $data['stok_alat'];?>" required></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><div class="custom-select" style="width: 270px">
                      <select name="kategori" required>
                        <option value="<?php echo $data['kategori'];?>">Pilih Kategori</option>
                        <?php
                         $query="SELECT * FROM tb_kategori" ; 
                         $hasil=mysqli_query($koneksi,$query);
                         $jum=mysqli_num_rows($hasil); 
                         while ($data=mysqli_fetch_array($hasil)) {
                       ?>
                        <option value="<?php echo $data['kategori'];?>"><?php echo $data['kategori'];?></option>
                        <?php } ?>

                      </select>
                    </div>
                </tr>
                <?php
      $id_alat=$_GET['id_alat'];
      $query="SELECT * FROM tb_alat WHERE id_alat='$id_alat'";
      $hasil=mysqli_query($koneksi, $query);
      $data=mysqli_fetch_array($hasil);
      ?>
                <tr>
                  <td>Gambar 1</td>
                  <td><input type="file"  name="foto1" value="<?php echo $data['gambar_alat1'];?>" required> </td>
              </tr>
              <tr>
                  <td>Gambar 2</td>
                  <td><input type="file"  name="foto2" value="<?php echo $data['gambar_alat2'];?>"> </td>
              </tr>
                <tr>
                  <td>Spesifikasi</td>
                  <td class="ket"><input type="text" name="ket1" value="<?php echo $data['ket1'];?>" required></td>
                  <td class="spek-input"><input type="text" name="spek1" value="<?php echo $data['spek1'];?>" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket2" value="<?php echo $data['ket2'];?>" required></td>
                  <td class="spek-input"><input type="text" name="spek2" value="<?php echo $data['spek2'];?>" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket3" value="<?php echo $data['ket3'];?>" required></td>
                  <td class="spek-input"><input type="text" name="spek3" value="<?php echo $data['spek3'];?>" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket4" value="<?php echo $data['ket4'];?>" required></td>
                  <td class="spek-input"><input type="text" name="spek4" value="<?php echo $data['spek4'];?>" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket5" value="<?php echo $data['ket5'];?>"></td>
                  <td class="spek-input"><input type="text" name="spek5" value="<?php echo $data['spek5'];?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket6" value="<?php echo $data['ket6'];?>"></td>
                  <td class="spek-input"><input type="text" name="spek6" value="<?php echo $data['spek6'];?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket7" value="<?php echo $data['ket7'];?>"></td>
                  <td class="spek-input"><input type="text" name="spek7" value="<?php echo $data['spek7'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="id_alat" value="<?php echo $data['id_alat'];?>" hidden></td>
                </tr>
            </table>
            <input type="submit" value="Simpan">
          </div>
          </form>
      </div>
    </div>
    <script type="text/javascript" src="../../js/coba.js"></script>
  </body>
</html>

