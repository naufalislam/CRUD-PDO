<?php 
// koneksi database
include 'koneksi.php';

if(isset($_POST['simpan'])){
    // menangkap data yang di kirim dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $smt = $_POST['smt'];
    $prodi = $_POST['prodi'];



    if(empty($nama)){
        echo "<p style='color:red'>Name tidak boleh kosong!</p>";
    }
    else if(empty($nim)){
        echo "<p style='color:red'>NIM tidak boleh kosong!</p>";
    }
    else if(empty($ttl)){
        echo "<p style='color:red'>Tempat Tanggal Lahir tidak boleh kosong!</p>";
    }
    else if(empty($alamat)){
        echo "<p style='color:red'>alamat tidak boleh kosong!</p>";
    }
    else if(empty($smt)){
        echo "<p style='color:red'>Semester tidak boleh kosong!</p>";
    }
    else if(empty($prodi)){
        echo "<p style='color:red'>Prodi tidak boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($koneksi,"insert into mahasiswa (`id`, `nama`, `nim`, `ttl`, `alamat`, `smt`, `prodi`) 
    values('','$nama','$nim','$ttl','$alamat','$smt','$prodi')");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }
}
?>