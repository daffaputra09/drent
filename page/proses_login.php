<?php 
    session_start();
    include '../koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $pengacak = "p3ng4c4k";
    $passmd = md5 ($pengacak . md5($password));
    $login = mysqli_query($koneksi,"SELECT* FROM tb_user WHERE username='$username' and password='$passmd'");
    $cek = mysqli_num_rows($login);

    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        if($passmd == $data['password'] && $data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:admin/index.php");

        }else if($passmd == $data['password'] && $data['level']=="user"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "user";
            header("location:user/index.php");

    }else{
        echo "<script>alert('Login Gagal');window.location='login.php';</script>";
}
    }else{
        echo "<script>alert('Login Gagal');window.location='login.php';</script>";
}

?>

