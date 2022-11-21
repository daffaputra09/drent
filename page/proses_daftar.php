<?php
$username = $_POST['username'];
$nama_user = $_POST['nama_user'];
$password1 = $_POST['password'];
$password2 = $_POST['password1'];
$level = "user";

if ($password1 == $password2)
{
    include "../koneksi.php";
    $pengacak = "p3ng4c4k";
    $passmd = md5($pengacak.md5($password1));
    $query = "INSERT INTO tb_user VALUES ('$username', '$passmd','$nama_user','','','','', '$level')";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "<script>alert('User berhasil terdaftar');window.location='login.php';</script>";
        }
    else echo "<script>alert('Proses daftar gagal');window.location='daftar.php';</script>";
}
else echo "<script>alert('Password yang dimasukkan berbeda');window.location='daftar.php';</script>";
?>
