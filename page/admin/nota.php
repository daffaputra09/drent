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
    <title>Nota</title>
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
          <li><a class="strong" href="nota.php">Nota</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a href="alat.php">Alat</a></li>
          <li><a href="user.php">User</a></li>

        </ul>
      </div>
      <!--entek e sidebar-->
      <div class="konten-admin">
        <div class="admin">
          <h1>Nota</h1>
          <div class="admin-search">
            <input type="text" name="search" id="search" placeholder="Cari data...  " />
          </div>
          <img class="admin-sch-icon" src="../../img/search.svg" alt="" />
          <div class="tbl-admin">
            <div class="tbl-head">
              <table>
                <tr>
                  <th style="width: 50px">No</th>
                  <th style="width: 850px">Penyewa</th>
                  <th style="width: 200px">Action</th>
                </tr>
              </table>
            </div>
            <table class="tbl-isi">
              <tr>
                <td class="nomor">19</td>
                <td class="tengah"><a href="detail-nota.php">Daffa Putra Prasetya</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">18</td>
                <td class="tengah"><a href="detail-nota.php">Hadijah Adi</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">17</td>
                <td class="tengah"><a href="detail-nota.php">Daffa Putra Prasetya</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">16</td>
                <td class="tengah"><a href="detail-nota.php">Dian Yuda</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">15</td>
                <td class="tengah"><a href="detail-nota.php">Amir Susila</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">14</td>
                <td class="tengah"><a href="detail-nota.php">Sri Cinta</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">13</td>
                <td class="tengah"><a href="detail-nota.php">Danial Eka</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">12</td>
                <td class="tengah"><a href="detail-nota.php">Daffa Putra Prasetya</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">11</td>
                <td class="tengah"><a href="detail-nota.php">Anwar Wati</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">10</td>
                <td class="tengah"><a href="detail-nota.php">Wangi Hamidah</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
              <tr>
                <td class="nomor">9</td>
                <td class="tengah"><a href="detail-nota.php">Ilham Ahmad</a></td>
                <td class="action"><input type="submit" value="Selesai" name="" id="" /></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
