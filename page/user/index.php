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
    <title>Dashboard</title>
  </head>
  <body oncontextmenu="return false">
    <!-- Ini navbar yang ngerjakannya 2 jam -->
    <div class="nav">
      <img src="../../img/logo.png" class="logo" />
      <ul>
        <li><a class="strong" href="index.php">Home</a></li>
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
    <!-- Kategori -->
    <div class="container">
      <div class="kategori">
        <div class="jkategori">
          <h2>Kategori</h2>
        </div>
        <ul class="card-list">
        <?php
                $query="SELECT * FROM tb_kategori  WHERE kategori != 'paket'" ; 
                $hasil=mysqli_query($koneksi,$query); 
                $hasil=mysqli_query($koneksi,$query); 
                while ($data=mysqli_fetch_array($hasil)) {
              ?>
          <li class="card">
            <a class="card-image" href="kategori.php?kategori=<?php echo $data['kategori'];?>">
              <img src="../../images_upload/<?php echo $data['gambar_kategori'];?>" alt="" />
            </a>
            <a class="card-description" href="kategori.php?kategori=<?php echo $data['kategori'];?>">
              <p><?php echo $data['kategori'];?></p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <!-- entek e Kategori-->
    <!-- alat baru-->
    <div class="baru">
      <div class="kursor">
        <h2>Peralatan Terbaru</h2>
        <span class="kiri"><img src="../../img/kiri.svg" alt="" /></span>
        <span><img src="../../img/kanan.svg" alt="" /></span>
      </div>
      <main>
        <section>
          <a href="#" class="produk">
            <img src="../../img/baru-zhiyun.png" alt="" />
            <div class="detail">
              <p>
                <b>Zhiyun Crane Plus</b><br />
                <small>Rp. 130.000 / hari</small>
              </p>
            </div>
          </a>
          <a href="#" class="produk">
            <img src="../../img/baru-lensa.png" alt="" />
            <div class="detail">
              <p>
                <b>Lensa Canon 70-200 L</b><br />
                <small>Rp. 150.000 / hari</small>
              </p>
            </div>
          </a>
          <a href="#" class="produk">
            <img src="../../img/baru-godox.png" alt="" />
            <div class="detail">
              <p>
                <b>Godox SL150W</b><br />
                <small>Rp. 125.000 / hari</small>
              </p>
            </div>
          </a>
          <a href="#" class="produk">
            <img src="../../img/baru-a73.png" alt="" />
            <div class="detail">
              <p>
                <b>Sony Alpha A7iii</b><br />
                <small>Rp. 290.000 / hari</small>
              </p>
            </div>
          </a>
          <a href="#" class="produk">
            <img src="../../img/baru-a7s3.png" alt="" />
            <div class="detail">
              <p>
                <b>Sony Alpha A7Siii</b><br />
                <small>Rp. 480.000 / hari</small>
              </p>
            </div>
          </a>
        </section>
      </main>
    </div>
    <!-- entek e alat baru-->
    <!-- paket sewa -->
    <div class="paket">
      <div class="kursor">
        <h2>Paket Sewa</h2>
        <span class="kiri"><img src="../../img/kiri.svg" alt="" /></span>
        <span><img src="../../img/kanan.svg" alt="" /></span>
      </div>
      <main>
        <section>
          <a href="#" class="produk2">
            <div class="detail2">
              <p>
                <b>Paket Strobist</b><b class="strong"> Basic</b><br /><br />
                <small>&#x2022; 2 Flash Godox TT-520 ii</small><br />
                <small>&#x2022; 2 Lightstand kecil</small><br />
                <small>&#x2022; 2 Payung</small><br />
                <small>&#x2022; 1 Triger</small><br />
                <small>&#x2022; Tas</small>
              </p>

              <img src="../../img/basic.png" alt="" />
            </div>
          </a>
          <a href="#" class="produk2">
            <div class="detail2">
              <p>
                <b>Paket Strobist</b><b class="strong"> Pro HSS</b><br /><br />
                <small>&#x2022; 2 Flash Godox TT-600</small><br />
                <small>&#x2022; 2 Lightstand kecil</small><br />
                <small>&#x2022; 2 Payung</small><br />
                <small>&#x2022; 1Triger X2t Sony</small><br />
                <small>&#x2022; Tas</small>
              </p>
              <img src="../../img/pro.png" alt="" />
            </div>
          </a>
          <a href="#" class="produk2">
            <div class="detail2">
              <p>
                <b>Paket Lighting</b><b class="strong"> Studio</b><br /><br />
                <small>&#x2022; 2 Strobe Flash Godox MS300</small><br />
                <small>&#x2022; 2 Lightstand Besar</small><br />
                <small>&#x2022; 2 Payung / Softbox</small><br />
                <small>&#x2022; 1 Triger</small><br />
                <small>&#x2022; Tas</small>
              </p>
              <img src="../../img/studio.png" alt="" />
            </div>
          </a>
        </section>
      </main>
    </div>
    <!-- entek e paket sewa -->
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
    <script type="text/javascript" src="../../js/script.js"></script>
    <script type="text/javascript" src="../../js/paket.js"></script>
  </body>
</html>
