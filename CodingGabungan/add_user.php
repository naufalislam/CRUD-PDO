<?php 
// koneksi database
include 'koneksi.php';

if(isset($_POST['simpen'])){
    // menangkap data yang di kirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];



    if(empty($username)){
        echo "<p style='color:red'>Username tidak boleh kosong!</p>";
    }
    else if(empty($password)){
        echo "<p style='color:red'>Password tidak boleh kosong!</p>";
    }
    else if(empty($email)){
        echo "<p style='color:red'>Email tidak boleh kosong!</p>";
    }
    else if(empty($ttl)){
        echo "<p style='color:red'>Tempat Tanggal lahir tidak boleh kosong!</p>";
    }
    else if(empty($alamat)){
        echo "<p style='color:red'>Alamat tidak boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($koneksi,"insert into user (`id`, `username`, `password`,`email`, `ttl`, `alamat`) 
    values('','$username','$password','$email','$ttl','$alamat')");
    // mengalihkan halaman kembali ke index.php
    header("location:user.php");
    }
}
?>