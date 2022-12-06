<?php

include "../../koneksi.php";
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Kategori</title>
  </head>
  <body oncontextmenu="return false">
    <!-- Ini navbar yang ngerjakannya 2 jam -->
    <div class="nav">
      <img src="../../img/logo.png" class="logo" />
      <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="wishlist.php">Wishlist</a></li>
        <li><a href="nota.php">Nota</a></li>
        <li><a href="profil.php">Profil</a></li>
      </ul>
      <div class="search">
        <input type="text" name="search" id="search" placeholder="Mau sewa apa hari ini??" />
      </div>
      <img class="search-icon" src="../../img/search.svg" alt="" />
      <div class="tombol">
        <div class="btn-daftar">
          <a href="../daftar.php">
            <input type="button" value="Daftar" />
          </a>
        </div>
        <div class="btn-login">
          <a href="../login.php">
            <input type="button" value="Masuk" />
          </a>
        </div>
      </div>
    </div>
    <?php
     $query="SELECT * FROM tb_alat" ; 
     $hasil=mysqli_query($koneksi,$query);
     $jum=mysqli_num_rows($hasil); 
    ?>
    <!-- entek e navbar-->
    <div class="konten">
      <h2><?php echo "Menampilkan  ".$jum . " Alat"; ?></h2>
      <div class="konten-alat">
      <?php
                
                while ($data=mysqli_fetch_array($hasil)) {
              ?>
        <a href="detail-alat.php?id_alat=<?php echo $data['id_alat'];?>">
          <div class="alat">
            <img src="../../images_upload/<?php echo $data['gambar_alat1'];?>" alt="" />
            <h2><?php echo $data['nama_alat'];?></h2> 
            <p><?php echo 'Rp. ' . number_format($data['harga_alat'], 0, ",", ".");?></p>
          </div>
        </a>
        <?php
                }
                ?>
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
