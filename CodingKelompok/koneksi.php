<?php 
$koneksi = mysqli_connect("localhost","root","","web2");

if (mysqli_connect_errno()){
	echo "Gagal membuat koneksi : " . mysqli_connect_error();
}

?>