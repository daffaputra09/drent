<?php
include "../../koneksi.php";
$id_alat=$_GET['id_alat'];
$query="DELETE FROM tb_alat where id_alat='$id_alat'";
$hasil=mysqli_query($koneksi,$query);
if($hasil){
    ?>
    <script language="javascript">document.location.href="alat.php";</script>
    <?php
} else {
    echo "gagal hapus data";
}
?>