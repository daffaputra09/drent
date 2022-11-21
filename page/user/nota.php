<?php
session_start();
if ($_SESSION['level']=="admin" || $_SESSION['level']==""){
    echo "<script>alert('Akses Ditolak');window.location='../../index.php';</script>";
}   
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Nota</title>
  </head>
  <body oncontextmenu="return false">
    <!-- Ini navbar yang ngerjakannya 2 jam -->
    <div class="nav">
      <img src="../../img/logo.png" class="logo" />
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="wishlist.php">Wishlist</a></li>
        <li><a class="strong" href="nota.php">Nota</a></li>
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
    <div class="con-nota">
      <h1>Nota</h1>
      <a href="detail-nota.php">
        <div class="nota">
          <h2>#19 Daffa Putra Prasetya</h2>
          <h3>2 Hari</h3>
          <div class="line"></div>
        </div>
      </a>
      <a href="">
        <div class="nota">
          <h2>#17 Daffa Putra Prasetya</h2>
          <h3>1 Hari</h3>
          <div class="line"></div>
        </div>
      </a>
      <a href="">
        <div class="nota">
          <h2>#12 Daffa Putra Prasetya</h2>
          <h3>1 Hari</h3>
          <div class="line"></div>
        </div>
      </a>
      <a href="">
        <div class="nota">
          <h2>#7 Daffa Putra Prasetya</h2>
          <h3>2 Hari</h3>
          <div class="line"></div>
        </div>
      </a>
      <a href="">
        <div class="nota">
          <h2>#3 Daffa Putra Prasetya</h2>
          <h3>3 Hari</h3>
          <div class="line"></div>
        </div>
      </a>
      <a href="">
        <div class="nota">
          <h2>#2 Daffa Putra Prasetya</h2>
          <h3>1 Hari</h3>
          <div class="line"></div>
        </div>
      </a>
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
