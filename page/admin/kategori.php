<?php
session_start();
if ($_SESSION['level']=="user" || $_SESSION['level']==""){
    echo "<script>alert('Akses Ditolak');window.location='../../index.php';</script>";
}   
include "../../koneksi.php";
$query="SELECT * FROM tb_user WHERE username='$_SESSION[username]'";
$hasil=mysqli_query($koneksi, $query);
$data=mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Kategori</title>
  </head>
  <body oncontextmenu="return false">
    <!--sidebar-->
    <div class="con-admin">
      <div class="side-bar">
        <img src="../../img/admin.JPG" alt="" />
        <div class="logout">
          <table>
            <tr>
              <td>
                <a href="logout.php"><img src="../../img/logout.svg" alt="" /></a>
              </td>
              <td><?php echo $data['nama_user'];?></td>
            </tr>
          </table>
        </div>
        <ul>
          <li><a href="nota.php">Nota</a></li>
          <li><a class="strong" href="kategori.php">Kategori</a></li>
          <li><a href="alat.php">Alat</a></li>
          <li><a href="user.php">User</a></li>

        </ul>
      </div>
      <!--entek e sidebar-->
      <div class="konten-admin">
        <div class="admin">
          <h1>Kategori</h1>
          <div class="admin-search">
            <input type="text" name="search" id="search" placeholder="Cari data...  " />
            <a href="tambah-kategori.php"><input type="button" value="Tambah" /></a>
          </div>
          <img class="admin-sch-icon" src="../../img/search.svg" alt="" />
          <div class="tbl-admin">
            <div class="tbl-head">
              <table>
                <tr>
                  <th style="width: 50px">No</th>
                  <th style="width: 850px">Kategori</th>
                  <th style="width: 200px">Action</th>
                </tr>
              </table>
            </div>
            <div class="tbl-isi">
              <table>
              <?php
                $query="SELECT * FROM tb_kategori" ; 
                $hasil=mysqli_query($koneksi,$query); 
                $no=1;
                while ($data=mysqli_fetch_array($hasil)) {
              ?>
                <tr>
                  <td class="nomor"><?php echo $no++;?></td>
                  <td class="tengah"><?php echo $data['kategori'];?></td>
                  <td class="action-kategori">
                    <a href="edit-kategori.php?id_kategori=<?php echo $data['id_kategori'];?>">
                      <img src="../../img/edit.svg" alt="" />
                    </a>
                  </td>
                  <td class="action-kategori">
                    <a href="delete-kategori.php?id_kategori=<?php echo $data['id_kategori'];?>"onclick="return confirm('Menghapus <?php echo $data['kategori'];?>?')">
                      <img src="../../img/trash.svg" alt="" />
                    </a>
                  </td>
                </tr>
                <?php
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
