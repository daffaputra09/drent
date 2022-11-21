<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/daftar.css" />
    <title>Sign Up Page</title>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <b><p class="judul">Daftar</p></b>
        <form action="proses_daftar.php" method="post">
          <div class="isian">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" onkeypress="return event.which != 32" autofocus required />
          </div>
          <div class="isian">
            <label for="username">Nama Lengkap</label>
            <input type="text" name="nama_user" id="nama_user" required />
          </div>
          <div class="isian">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" maxlength="32" required />
            <img src="../img/show.svg" onclick="pass()" class="pass-icon" id="pass-icon" />
          </div>
          <div class="isian">
            <label for="password">Konfirmasi Password</label>
            <input type="password" name="password1" id="password1" maxlength="32" required />
            <img src="../img/show.svg" onclick="pass1()" class="pass-icon1" id="pass-icon1" />
          </div>
        
        <p class="opsi">Sudah punya akun?</p>
        <div class="btn-link">
          <a href="login.php">Masuk</a>
        </div>
        <input type="submit" name="submit" value="Daftar">
      </div>
      </form>
      <div class="right">
        <img src="../img/daftar.svg" alt="" />
      </div>
    </div>
    <script>
      var a;
      function pass() {
        if (a == 1) {
          document.getElementById('password').type = 'password';
          document.getElementById('pass-icon').src = '../img/show.svg';
          a = 0;
        } else {
          document.getElementById('password').type = 'text';
          document.getElementById('pass-icon').src = '../img/hide.svg';
          a = 1;
        }
      }
      var a;
      function pass1() {
        if (a == 1) {
          document.getElementById('password1').type = 'password';
          document.getElementById('pass-icon1').src = '../img/show.svg';
          a = 0;
        } else {
          document.getElementById('password1').type = 'text';
          document.getElementById('pass-icon1').src = '../img/hide.svg';
          a = 1;
        }
      }
    </script>
  </body>
</html>
