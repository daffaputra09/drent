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
        <li><a href="index.php">Home</a></li>
        <li><a href="wishlist.php">Wishlist</a></li>
        <li><a href="nota.php">Nota</a></li>
        <li><a href="profil.php">Profil</a></li>
      </ul>
      <div class="search">
        <input type="text" name="search" id="search" placeholder="Mau sewa apa hari ini??" />
      </div>
      <img class="search-icon" src="img/search.svg" alt="" />
      <div class="tombol">
        <div class="btn-logout">
          <input type="button" value="Keluar" />
        </div>
      </div>
    </div>
    <!-- entek e navbar-->
    <div class="jsewa">
      <h1>Pesan Sekarang</h1>
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
                <td>Rp. 110.000</td>
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
                <th class="strong">Rp. 110.000</th>
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
      var x, i, j, l, ll, selElmnt, a, b, c;
      x = document.getElementsByClassName('custom-select');
      l = x.length;
      for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName('select')[0];
        ll = selElmnt.length;
        a = document.createElement('DIV');
        a.setAttribute('class', 'select-selected');
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        b = document.createElement('DIV');
        b.setAttribute('class', 'select-items select-hide');
        for (j = 1; j < ll; j++) {
          c = document.createElement('DIV');
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener('click', function (e) {
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName('select')[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName('same-as-selected');
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute('class');
                }
                this.setAttribute('class', 'same-as-selected');
                break;
              }
            }
            h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener('click', function (e) {
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle('select-hide');
          this.classList.toggle('select-arrow-active');
        });
      }

      function closeAllSelect(elmnt) {
        var x,
          y,
          i,
          xl,
          yl,
          arrNo = [];
        x = document.getElementsByClassName('select-items');
        y = document.getElementsByClassName('select-selected');
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i);
          } else {
            y[i].classList.remove('select-arrow-active');
          }
        }
        for (i = 0; i < xl; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add('select-hide');
          }
        }
      }
      document.addEventListener('click', closeAllSelect);
    </script>
  </body>
</html>
