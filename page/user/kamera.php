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
    <title>Kamera</title>
  </head>
  <body oncontextmenu="return false">
    <!-- Ini navbar yang ngerjakannya 2 jam -->
    <div class="nav">
      <img src="../../img/logo.png" class="logo" />
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="wishlist.php">Wishlist</a></li>
        <li><a href="nota.php">Nota</a></li>
        <li><a href="profil.php">Profil</a></li>
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
    <div class="konten">
      <h2>Menampilkan 20 Barang</h2>
      <div class="konten-alat">
      <?php
                $query="SELECT * FROM tb_alat" ; 
                $hasil=mysqli_query($koneksi,$query); 
                while ($data=mysqli_fetch_array($hasil)) {
              ?>
        <a href="detail-alat.php?id_alat=<?php echo $data['id_alat'];?>">
          <div class="alat">
            <img src="<?php echo $data['gambar_alat'];?>" alt="" />
            <h2>Sony Alpha A6000</h2>
            <p>Rp. 110.000 / hari</p>
          </div>
        </a>
        <?php
                }
                ?>
        <a href="">
          <div class="alat">
            <img src="../../img/alat/A6300.png" alt="" />
            <h2>Sony Alpha A6300</h2>
            <p>Rp. 140.000 / hari</p>
          </div>
        </a>
        <a href="">
          <div class="alat">
            <img src="../../img/alat/A6400.png" alt="" />
            <h2>Sony Alpha A6400</h2>
            <p>Rp. 150.000 / hari</p>
          </div>
        </a>
        <a href="">
          <div class="alat">
            <img src="../../img/alat/A6500.png" alt="" />
            <h2>Sony Alpha A6500</h2>
            <p>Rp. 160.000 / hari</p>
          </div>
        </a>
        <a href="">
          <div class="alat">
            <img src="../../img/alat/A72.png" alt="" />
            <h2>Sony Alpha A7ii</h2>
            <p>Rp. 240.000 / hari</p>
          </div>
        </a>
        <div class="alat">
          <img src="../../img/alat/A73.png" alt="" />
          <h2>Sony Alpha A7ii</h2>
          <p>Rp. 290.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/A7S3.png" alt="" />
          <h2>Sony Alpha A7iii</h2>
          <p>Rp. 480.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/X-M1.png" alt="" />
          <h2>Fujifilm X-M1</h2>
          <p>Rp. 80.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/X A2.png" alt="" />
          <h2>Fujifilm X-A2</h2>
          <p>Rp. 80.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/X A3.png" alt="" />
          <h2>Fujifilm X-A3</h2>
          <p>Rp. 100.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/X A5.png" alt="" />
          <h2>Fujifilm X-A5</h2>
          <p>Rp. 110.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/X T30.png" alt="" />
          <h2>Fujifilm X-T30</h2>
          <p>Rp. 110.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/m10.png" alt="" />
          <h2>Canon EOS M10</h2>
          <p>Rp. 80.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/m3.png" alt="" />
          <h2>Canon EOS M3</h2>
          <p>Rp. 100.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/1300D.png" alt="" />
          <h2>Canon 1300D</h2>
          <p>Rp. 90.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/700D.png" alt="" />
          <h2>Canon 700D</h2>
          <p>Rp. 110.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/60D.png" alt="" />
          <h2>Canon 60D</h2>
          <p>Rp. 120.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/6D.png" alt="" />
          <h2>Canon 6D</h2>
          <p>Rp. 280.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/5Diii.png" alt="" />
          <h2>Canon 5Dii</h2>
          <p>Rp. 325.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/NX100.png" alt="" />
          <h2>Sony HXR NX100P</h2>
          <p>Rp. 250.000 / hari</p>
        </div>
        <div class="alat">
          <img src="../../img/alat/NX100.png" alt="" />
          <h2>Sony HXR NX100P</h2>
          <p>Rp. 250.000 / hari</p>
        </div>
      </div>
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
