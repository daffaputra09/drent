<?php
include "../../koneksi.php";

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
          <p>Tersedia <?php echo $data['stok_alat'];?> Barang</p>
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
          <td><?php echo $data['ket3'];?></td>
          <td><?php echo $data['ket4'];?></td>
        </tr>
        <tr>
          <td class="isi"><?php echo $data['spek3'];?></td>
          <td class="isi"><?php echo $data['spek4'];?></td>
        </tr>
        <tr>
          <td><?php echo $data['ket5'];?></td>
          <td><?php echo $data['ket6'];?></td>
        </tr>
        <tr>
          <td class="isi"><?php echo $data['spek5'];?></td>
          <td class="isi"><?php echo $data['spek6'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['ket7'];?></td>
        </tr>
        <tr>
        <td class="isi"><?php echo $data['spek7'];?></td>
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
