<?php
require  '../../koneksi.php';
$foto1 = $_FILES['foto1']['name'];
$file_tmp1 = $_FILES['foto1']['tmp_name'];
$kategori = $_POST['kategori'];
$id_kategori = $_POST['id_kategori'];

move_uploaded_file($file_tmp1, '../../images_upload/'.$foto1);
$query = "UPDATE tb_kategori SET id_kategori='$id_kategori', kategori = '$kategori' , gambar_kategori = '$foto1' WHERE id_kategori='$id_kategori'; ";

mysqli_query($koneksi, $query);
echo "<script>alert('Kategori berhasil diubah');window.location='kategori.php';</script>";
?>