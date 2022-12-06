<?php
require  '../../koneksi.php';
$foto1 = $_FILES['foto1']['name'];
$file_tmp1 = $_FILES['foto1']['tmp_name'];
$foto2 = $_FILES['foto2']['name'];
$file_tmp2 = $_FILES['foto2']['tmp_name'];
$nama_alat = $_POST['nama_alat'];
$harga_alat = $_POST['harga_alat'];
$stok_alat = $_POST['stok_alat'];
$kategori = $_POST['kategori'];
$ket1 = $_POST['ket1'];
$ket2 = $_POST['ket2'];
$ket3 = $_POST['ket3'];
$ket4 = $_POST['ket4'];
$ket5 = $_POST['ket5'];
$ket6 = $_POST['ket6'];
$ket7 = $_POST['ket7'];
$spek1 = $_POST['spek1'];
$spek2 = $_POST['spek2'];
$spek3 = $_POST['spek3'];
$spek4 = $_POST['spek4'];
$spek5 = $_POST['spek5'];
$spek6 = $_POST['spek6'];
$spek7 = $_POST['spek7'];
$id_alat = $_POST['id_alat'];

move_uploaded_file($file_tmp1, '../../images_upload/'.$foto1);
move_uploaded_file($file_tmp2, '../../images_upload/'.$foto2);
$query = "UPDATE tb_alat SET nama_alat = '$nama_alat' , harga_alat = '$harga_alat', stok_alat = '$stok_alat' , kategori = '$kategori' , gambar_alat1 = '$foto1' , gambar_alat2 = '$foto2' , ket1 = '$ket1', ket2 = '$ket2', ket3 = '$ket3', ket4 = '$ket4', ket5 = '$ket5', ket6 = '$ket6', ket7 = '$ket7',spek1 ='$spek1',spek2 ='$spek2',spek3 ='$spek3',spek4 ='$spek4',spek5 ='$spek5',spek6 ='$spek6',spek7 ='$spek7' WHERE id_alat='$id_alat' ";

mysqli_query($koneksi, $query);
echo "<script>alert('Alat berhasil diubah');window.location='alat.php';</script>";
?>