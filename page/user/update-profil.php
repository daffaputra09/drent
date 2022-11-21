<?php
include "../../koneksi.php";
$username = $_POST['username'];
$nama_user=$_POST['nama_user'];
$email_user=$_POST['email_user'];
$nomor_user=$_POST['nomor_user'];
$alamat_user=$_POST['alamat_user'];
$query="UPDATE tb_user SET username='$username', nama_user='$nama_user', email_user='$email_user', nomor_user='$nomor_user', alamat_user='$alamat_user' WHERE username='$username';";
$hasil=mysqli_query($koneksi,$query);
if($hasil) {
    header('location:profil.php');
} else {
    echo"Gagal update data";
    echo mysqli_error();
}
?>