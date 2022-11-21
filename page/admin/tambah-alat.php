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
            <form action="" method="post">
            <table>
                <tr>
                    <td class="kiri-form" >Nama</td>
                    <td colspan="2"><input type="text" name="nama_alat"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td colspan="2"><input type="text" name="harga_alat"></td>
                </tr>
                <tr>
                  <td>Stok Alat</td>
                  <td colspan="2"><input type="text" name="stok_alat"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><div class="custom-select" style="width: 270px">
                      <select name="kategori">
                        <option value="">Pilih Kategori</option>
                        <option value="kamera">Kamera</option>
                        <option value="lensa">Lensa</option>
                        <option value="lighting">Lighting</option>
                        <option value="baterai">Baterai</option>
                        <option value="peralatan">Peralatan</option>
                        <option value="perekam">Perekam</option>
                        <option value="stabilizer">Stabilizer</option>
                        <option value="adapter">Adapter</option>
                      </select>
                    </div>
                </tr>
                <tr>
                  <td>Gambar</td>
                  <td><input type="file" id="file" name="gambar_alat" accept="image/*" hidden /> <button class="select-image">Upload Gambar</button></td>
              </tr>
              <tr>
                  <td></td>
                  <td><div class="img-area" data-img=""></div></td>
              </tr>
                <tr>
                  <td>Spesifikasi</td>
                  <td class="ket"><input type="text" name="ket1"></td>
                  <td class="spek-input"><input type="text" name="spek1"></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket2"></td>
                  <td class="spek-input"><input type="text" name="spek2"></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket3"></td>
                  <td class="spek-input"><input type="text" name="spek3"></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="ket"><input type="text" name="ket4"></td>
                  <td class="spek-input"><input type="text" name="spek4"></td>
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
            <input type="submit" value="Tambah" name="submit">
          </div>
          </form>
      </div>
    </div>
    <script type="text/javascript" src="../../js/admin.js"></script>
  </body>
</html>
<?php
include "../../koneksi.php";
@$id_alat = $_POST['id_alat'];
@$nama_alat = $_POST['nama_alat'];
@$harga_alat = $_POST['harga_alat'];
@$stok_alat = $_POST['stok_alat'];
@$kategori = $_POST['kategori'];
@$gambar_alat = $_POST['gambar_alat'];
@$ket1 = $_POST['ket1'];
@$ket2 = $_POST['ket2'];
@$ket3 = $_POST['ket3'];
@$ket4 = $_POST['ket4'];
@$ket5 = $_POST['ket5'];
@$ket6 = $_POST['ket6'];
@$ket7 = $_POST['ket7'];
@$spek1 = $_POST['spek1'];
@$spek2 = $_POST['spek2'];
@$spek3 = $_POST['spek3'];
@$spek4 = $_POST['spek4'];
@$spek5 = $_POST['spek5'];
@$spek6 = $_POST['spek6'];
@$spek7 = $_POST['spek7'];
@$submit = $_POST['submit'];
if($submit) {
    $query_insert="INSERT INTO tb_alat (id_alat, nama_alat, harga_alat, stok_alat, kategori, gambar_alat, ket1, ket2, ket3, ket4, ket5, ket6, ket7, spek1, spek2, spek3, spek4, spek5, spek6, spek7)
     VALUES ('','$nama_alat','$harga_alat','$stok_alat','$kategori',''$gambar_alat,'$ket1','$ket2','$ket3','$ket4','$ket5','$ket6','$ket7',
    '$spek1','$spek2','$spek3','$spek4','$spek5','$spek6','$spek7');";
    $hasil = mysqli_query($koneksi_db, $query_insert) or die ("ERROR INSERT DATA");
}

?>