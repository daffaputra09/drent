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
    <title>Detail</title>
    <style>
      .wish p {
  font-weight: 500;
  position: absolute;
  margin-top: -25px;
  margin-left: 50px;
  color: white;
}
    </style>
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
    <?php
        $id_alat=$_GET['id_alat'];
        $query="SELECT * FROM tb_alat WHERE id_alat='$id_alat'";
        $hasil=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_array($hasil);
        ?>
    <div class="con-detail">
      <img src="../../images_upload/<?php echo $data['gambar_alat1'];?>" alt="" />
      <div class="info">
        <h1><?php echo $data['nama_alat'];?></h1>
        <h2><?php echo 'Rp. ' . number_format($data['harga_alat'], 0, ",", ".") . ' / hari';?></h2>
        <div class="jaminan">
          <h3>Pilihan Jaminan Sewa</h3>
          <table>
            <tr>
              <td>E KTP</td>
              <td>Ijazah</td>
              <td>BPKB</td>
            </tr>
            <tr>
              <td>KK</td>
              <td>Akta Kelahiran</td>
              <td>STNK</td>
            </tr>
            <tr>
              <td>KTM</td>
              <td>Paspor</td>
              <td>NPWP</td>
            </tr>
            <tr>
              <td>Kartu Pelajar</td>
              <td>Buku Nikah</td>
              <td>BPJS</td>
            </tr>
          </table>
        </div>
        <div class="btn-detail">
          <a href="sewa.php"><input type="submit" value="Sewa" /></a>
          <div class="wish" name="submit">
            <img src="img/wish-fill.svg" class="wish-icon" id="wish-icon" alt="" /> <p>Wishlist</p>
          </div>
          <p>Tersedia 5 Barang</p>
        </div>
      </div>
    </div>
    <div class="spek">
      <h1>Spesifikasi</h1>
      <table>
        <tr>
          <td><?php echo $data['ket1'];?></td>
          <td><?php echo $data['ket2'];?></td>
        </tr>
        <tr>
          <td class="isi"><?php echo $data['spek1'];?></td>
          <td class="isi"><?php echo $data['spek2'];?></td>
        </tr>
        <tr>
          <td>Max ISO</td>
          <td>Autofokus</td>
        </tr>
        <tr>
          <td class="isi">25600</td>
          <td class="isi">179 phase detect</td>
        </tr>
        <tr>
          <td>LCD</td>
          <td>Berat</td>
        </tr>
        <tr>
          <td class="isi">3 inch, 921.000 titik</td>
          <td class="isi">285 Gram</td>
        </tr>
        <tr>
          <td>Shutter Speed</td>
        </tr>
        <tr>
          <td class="isi">30?????? sampai 1/4000 detik</td>
        </tr>
      </table>
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
