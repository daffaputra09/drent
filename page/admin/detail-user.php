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
    <title>Detail User</title>
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
          <li><a  href="nota.php">Nota</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a href="alat.php">Alat</a></li>
          <li><a class="strong" href="user.php">User</a></li>
        </ul>
      </div>
      <?php
        $username=$_GET['username'];
        $query="SELECT * FROM tb_user WHERE username='$username'";
        $hasil=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_array($hasil);
        ?>
      <!--entek e sidebar-->
      <div class="konten-admin">
        <div class="admin">
        <div class="user-admin">
        <img src="../../img/user-letta2.jpg" alt="">
        <p><?php echo $data['nama_user'];?></p>
    </div>
            <div class="con-profil">
        <h2>Informasi Profil</h2>

        
        <table>
            <tr>
                <td class="label">Username</td>
                <td><input type="text" placeholder="Data Kosong" value="<?php echo $data['username'];?>" readonly></td>
            </tr>
            <tr>
                <td class="label">Nama</td>
                <td><input type="text" placeholder="Data Kosong" value="<?php echo $data['nama_user'];?>" readonly></td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td><input type="text" placeholder="Data Kosong" required value="<?php echo $data['email_user'];?>" readonly></td>
            </tr>
            <tr>
                <td class="label">No. Telp</td>
                <td><input type="text" placeholder="Data Kosong" required value="<?php echo $data['nomor_user'];?>" readonly></td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td><input type="text" placeholder="Data Kosong" value="<?php echo $data['alamat_user'];?>" readonly></td>
            </tr>
            <tr>
             <td></td>
            </tr>
        </table>
      </form>
    </div>
          </div>
        </div>
  </body>
</html>
