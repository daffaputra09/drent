<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Dashboard</title>
    <style>
      main header {
        width: 98%;
        height: 60px;
        margin: 0 auto;
        /*background: gray;*/
        display: flex;
        align-items: center;
        padding: 20px;
        justify-content: space-between;
        border-bottom: 2px solid #ddd;
      }
      header p span {
        font-size: 40px;
        margin: 0 5px;
        cursor: pointer;
        color: #555;
        width: 30px;
        height: 30px;
        display: inline-block;
        line-height: 19px;
        text-align: center;
        border-radius: 3px;
      }
      header p span:hover {
        background: #222;
        color: white;
      }
      section {
        background-color: green;
        width: 1000px;

        /*background: red;*/
        margin: auto;
        display: flex;
        align-items: center;
        overflow-x: auto;
      }
      section::-webkit-scrollbar {
        display: none;
      }
      section .product {
        min-width: 400;
        max-width: 400;
        height: 250;
        background: rgb(6, 89, 255);
        margin: 0 20px 0 0;
        border-radius: 20px;
        position: relative;
        left: 0;
        transition: 0.5s;
      }
      picture {
        height: 150px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        /*background: green;*/
        display: flex;
        overflow: hidden;
        margin-bottom: 20px;
      }

      .detail {
        width: 90%;
        /*background: red;*/
        margin: auto;
        padding: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 50px;
        font-size: 20px;
        color: #444;
      }
      small {
        color: #555;
      }
    </style>
  </head>
  <body>
    <!-- Ini navbar yang ngerjakannya 2 jam -->
    <div class="nav">
      <img src="img/logo.png" class="logo" />
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="strong" href="wishlist.php">Wishlist</a></li>
        <li><a href="nota.php">Nota</a></li>
        <li><a href="profil.php">Profil</a></li>
      </ul>
      <div class="search">
        <input type="text" name="search" id="search" placeholder="Mau sewa apa hari ini??" />
      </div>
      <img class="search-icon" src="img/search.svg" alt="" />
      <div class="tombol">
        <div class="btn-daftar">
          <a href="daftar.php">
            <input type="button" value="Daftar" />
          </a>
        </div>
        <div class="btn-login">
          <a href="login.php">
            <input type="button" value="Masuk" />
          </a>
        </div>
      </div>
    </div>
    <!-- entek e navbar-->
    <main>
      <header>
        <p>
          <span><img src="img/kiri.svg" alt="" /></span>
          <span><img src="img/kanan.svg" alt="" /></span>
        </p>
      </header>
      <section>
        <div class="product">
          <picture>
            <img src="img/craneplus.jpg" alt="" />
          </picture>
          <div class="detail">
            <p>
              <b>Product One</b><br />
              <small>New arrival</small>
            </p>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="img/a73.jpg" alt="" />
          </picture>
          <div class="detail">
            <p>
              <b>Product Two</b><br />
              <small>New arrival</small>
            </p>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="img/godox.jpg" alt="" />
          </picture>
          <div class="detail">
            <p>
              <b>Product Three</b><br />
              <small>New arrival</small>
            </p>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="img/kamera.png" alt="" />
          </picture>
          <div class="detail">
            <p>
              <b>Product Four</b><br />
              <small>New arrival</small>
            </p>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="img/kamera.png" alt="" />
          </picture>
          <div class="detail">
            <p>
              <b>Product Five</b><br />
              <small>New arrival</small>
            </p>
          </div>
        </div>
      </section>
    </main>

    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
