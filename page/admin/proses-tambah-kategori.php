<?php
require  '../../koneksi.php';
$foto1 = $_FILES['foto1']['name'];
$file_tmp1 = $_FILES['foto1']['tmp_name'];
$kategori = $_POST['kategori'];

move_uploaded_file($file_tmp1, '../../images_upload/'.$foto1);
$query = "INSERT INTO tb_kategori SET kategori = '$kategori' , gambar_kategori = '$foto1' ";

mysqli_query($koneksi, $query);
echo "<script>alert('Kategori berhasil ditambahkan');window.location='kategori.php';</script>";
?>