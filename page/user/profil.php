<?php
session_start();
if ($_SESSION['level']=="admin" || $_SESSION['level']==""){
    echo "<script>alert('Akses Ditolak');window.location='../../index.php';</script>";
}   
include "../../koneksi.php";
$query="SELECT * FROM tb_user WHERE username='$_SESSION[username]'";
$hasil=mysqli_query($koneksi, $query);
$data=mysqli_fetch_array($hasil);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Profil</title>
  </head>
  <body oncontextmenu="return false">
    <!-- Ini navbar yang ngerjakannya 2 jam -->
    <div class="nav">
      <img src="../../img/logo.png" class="logo" />
      <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a href="wishlist.php">Wishlist</a></li>
        <li><a href="nota.php">Nota</a></li>
        <li><a class="strong" href="profil.php">Profil</a></li>
      </ul>
      <div class="search">
        <input type="text" name="search" id="search" placeholder="Mau sewa apa hari ini??" />
      </div>
      <img class="search-icon" src="../../img/search.svg" alt="" />
      <div class="tombol">
      <div class="btn-logout">
          <a href="logout.php">
          <input type="button" value="Keluar" />
        </a>
        </div>
      </div>
    </div>
    <!-- entek e navbar-->
    <div class="user">
        <img src="../../img/user-letta2.jpg" alt="">
        <p><?php echo $data['nama_user'];?></p>
    </div>
    <div class="con-profil">
        <h2>Informasi Profil</h2>
        <form action="update-profil.php" method="post">
        <table>
            <tr>
                <td class="label">Username</td>
                <td><input type="text" name="username" placeholder="Data Kosong" value="<?php echo $data['username'];?>" readonly></td>
            </tr>
            <tr>
                <td class="label">Nama</td>
                <td><input type="text" name="nama_user" placeholder="Data Kosong" required value="<?php echo $data['nama_user'];?>"></td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td><input type="email" name="email_user" placeholder="Data Kosong" required value="<?php echo $data['email_user'];?>"></td>
            </tr>
            <tr>
                <td class="label">No. Telp</td>
                <td><input type="number" name="nomor_user" placeholder="Data Kosong" required value="<?php echo $data['nomor_user'];?>"></td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td><input type="text" name="alamat_user" placeholder="Data Kosong" required    value="<?php echo $data['alamat_user'];?>"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" value="Simpan" name=""></td>
            </tr>
        </table>
      </form>
    </div>
    <!-- footer bosss -->
    <footer class="footer">
      <div class="footer-left">
        <img src="../../img/footer.png" alt="" />
        <p>Website Sewa Kamera</p>
      </div>
      <div class="footer-center">
      <ul>
          <li><a href="index.php">Home</a> <br /></li>
          <li>
            <a href="Wishlist.php">Wishlist</a>
          </li>
          <li>
            <a href="nota.php">Nota</a>
          </li>
          <li>
            <a href="profil.php">Profil</a>
          </li>
        </ul>
      </div>
      <div class="footer-right">
        <table>
          <tr>
            <td><img src="../../img/instagram.svg" alt="" /></td>
            <td>@instagram</td>
          </tr>
          <tr>
            <td><img src="../../img/phone.svg" alt="" /></td>
            <td>08123456789</td>
          </tr>
          <tr>
            <td><img src="../../img/location.svg" alt="" /></td>
            <td>Jl. Tebo Tengah No. 50 Mulyorejo, Sukun, Malang</td>
          </tr>
        </table>
      </div>
    </footer>
    <!-- footer e habis bosss -->
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/paket.js"></script>
  </body>
</html>
