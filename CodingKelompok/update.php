<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$smt = $_POST['smt'];
$prodi = $_POST['prodi'];

// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', ttl='$ttl', alamat='$alamat', smt='$smt', prodi='$prodi' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>