<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <title>Login Page</title>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <img src="../img/login.svg" alt="" />
      </div>
      <div class="right">
        <b><p class="judul">Masuk</p></b>
        <form action="proses_login.php" method="post">
          <div class="isian">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" onkeypress="return event.which != 32" autofocus />
          </div>
          <div class="isian">
            <label for="password">Password</label>
            <input class="pass" type="password" name="password" id="password" maxlength="32"/>
            <img src="../img/show.svg" onclick="pass()" class="pass-icon" id="pass-icon" />
          </div>
          <input type="submit" name="submit" value="Masuk" />
        </form>
        <p class="opsi">Belum punya akun?</p>
        <div class="btn-link">
          <a href="daftar.php">Daftar</a>
        </div>
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
    </script>
  </body>
</html>
