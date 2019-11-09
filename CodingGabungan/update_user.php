<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$ttl = $_POST['ttl']; 
$alamat = $_POST['alamat'];


// update data ke database
mysqli_query($koneksi,"UPDATE `user` SET `username`= $username,`password`=$password,`email`=$email,`ttl`=$ttl,`alamat`=$alamat WHERE `id`= $id"); //   update user set username='$username', password='$password', email='$email', ttl='$ttl', alamat='$alamat',  where id='$id'

// mengalihkan halaman kembali ke index.php
header("location:user.php");

?>  