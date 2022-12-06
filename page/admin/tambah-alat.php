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
    <title>Tambah Alat</title>
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
      <div class="konten-admin">
        <div class="admin">
          <div class="admin-form">
            <h3>Tambah Alat</h2>
            <form action="proses-tambah-alat.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td class="kiri-form" >Nama</td>
                    <td colspan="2"><input type="text" name="nama_alat" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td colspan="2"><input type="number" name="harga_alat"  required></td>
                </tr>
                <tr>
                  <td>Stok Alat</td>
                  <td colspan="2"><input type="number" name="stok_alat" required></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><div class="custom-select" style="width: 270px">
                      <select name="kategori" required>
                        <option value="">Pilih Kategori</option>
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
                <tr>
                  <td>Gambar 1</td>
                  <td><input type="file"  name="foto1" required> </td>
              </tr>
              <tr>
                  <td>Gambar 2</td>
                  <td><input type="file"  name="foto2"> </td>
              </tr>
                <tr>
                  <td>Spesifikasi</td>
                  <td class="ket"><input type="text" name="ket1" required></td>
                  <td class="spek-input"><input type="text" name="spek1" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket2" required></td>
                  <td class="spek-input"><input type="text" name="spek2" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket3" required></td>
                  <td class="spek-input"><input type="text" name="spek3" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket4" required></td>
                  <td class="spek-input"><input type="text" name="spek4" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket5"></td>
                  <td class="spek-input"><input type="text" name="spek5"></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket6"></td>
                  <td class="spek-input"><input type="text" name="spek6"></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket7"></td>
                  <td class="spek-input"><input type="text" name="spek7"></td>
                </tr>
            </table>
            <input type="submit" value="Tambah">
          </div>
          </form>
      </div>
    </div>
    <script type="text/javascript" src="../../js/coba.js"></script>
  </body>
</html>

