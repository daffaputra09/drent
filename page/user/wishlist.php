<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Wishlist</title>
  </head>
  <body oncontextmenu="return false">
    <!-- Ini navbar yang ngerjakannya 2 jam -->
    <div class="nav">
      <img src="../../img/logo.png" class="logo" />
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="strong" href="wishlist.php">Wishlist</a></li>
        <li><a href="nota.php">Nota</a></li>
        <li><a href="profil.php">Profil</a></li>
      </ul>
      <div class="search">
        <input type="text" name="search" id="search" placeholder="Mau sewa apa hari ini??" />
      </div>
      <img class="search-icon" src="../../img/search.svg" alt="" />
      <div class="tombol">
        <div class="btn-logout">
          <input type="button" value="Keluar" />
        </div>
      </div>
    </div>
    <!-- entek e navbar-->
    <div class="jsewa">
      <h1>Wishlist</h1>
    </div>
    <div class="con-sewa">
      <div class="wrap-sewa">
        <div class="sewa-alat">
          <img src="../../img/alat/A6000.png" alt="" />
          <div class="info-alat">
            <h2>Sony Alpha A6000</h2>
            <h3 class="strong">Rp. 110.000 / hari</h3>
            <div class="tambah">
              <p>Jumlah Alat</p>
              <div class="btn-tambah">
                <div class="btn-min" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><img src="../../img/min.svg" alt="" /></div>
                <input type="number" min="0" max="5" value="0" />
                <div class="btn-plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><img src="../../img/plus.svg" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
        <div class="sewa-alat">
          <img src="../../img/alat/NX100.png" alt="" />
          <div class="info-alat">
            <h2>Sony HXR NX100P</h2>
            <h3 class="strong">Rp. 250.000 / hari</h3>
            <div class="tambah">
              <p>Jumlah Alat</p>
              <div class="btn-tambah">
                <div class="btn-min" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><img src="../../img/min.svg" alt="" /></div>
                <input type="number" min="0" max="5" value="0" />
                <div class="btn-plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><img src="../../img/plus.svg" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
        <div class="penerimaan">
          <h2>Penerimaan Barang</h2>
          <p class="">Pilih penerimaan</p>
          <select name="kategori">
            <option value="">Pilih Metode</option>
            <option value="kamera">Mengambil di gerai</option>
            <option value="lensa">Diantar oleh kurir</option>
          </select>
          <p class="alamat">Alamat</p>
          <textarea name="" cols="30" rows="10"></textarea>
        </div>
      </div>
      <div class="wrap-total">
        <div class="total-sewa">
          <h2>Total Harga</h2>
          <div class="jangka">.
            <p>Jangka Sewa (hari)</p>
            <div class="btn-tambah">
              <div class="btn-min" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><img src="../../img/min.svg" alt="" /></div>
              <input type="number" min="0" value="0" />
              <div class="btn-plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><img src="../../img/plus.svg" alt="" /></div>
            </div>
            <table>
              <tr>
                <td class="jangka-kiri">Harga</td>
                <td>Rp. 720.000</td>
              </tr>
              <tr>
                <td class="jangka-kiri">Diskon</td>
                <td>Rp. 0</td>
              </tr>
              <tr>
                <td class="jangka-kiri">Harga</td>
                <td>Rp. 0</td>
              </tr>
              <tr>
                <th>Total</th>
                <th class="strong">Rp. 720.000</th>
              </tr>
            </table>
            <div class="btn-sewa">
              <input type="submit" value="Sewa" />
            </div>
          </div>
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
          <li><a href="">Home</a> <br /></li>
          <li>
            <a href="">Wishlist</a>
          </li>
          <li>
            <a href="">Nota</a>
          </li>
          <li>
            <a href="">Profil</a>
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
    <script type="text/javascript">
    </script>
  </body>
</html>
