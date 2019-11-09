<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.erro {color: red};
	</style>
</head>
<body>
<div class="container">
	<br>
	<h2>Tambah Data Mahasiswa</h2>
	<br>
	
	<?php
		include ("add.php");
	?>

	<div class="col-md-6">
		<form method="post" action="form_mahasiswa.php" autocomplete="off">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="nama" id="nama">
			</div>
			<div class="form-group">
				<label for="nim">NIM</label>
				<input class="form-control" type="text" name="nim" id="nim">
			</div>
			<div class="form-group">
				<label for="ttl">Tempat Tanggal Lahir</label>
				<input class="form-control" type="text" name="ttl" id="ttl">
			</div>
			<div class="form-group">   
				<label for="alamat">Alamat</label>
				<input class="form-control" type="text" name="alamat" id="alamat">
			</div>
			<div class="form-group">   
				<label for="smt">Semester</label>
				<input class="form-control" type="text" name="smt" id="smt">
			</div>
			<div class="form-group">   
				<label for="prodi">Prodi</label>
				<input class="form-control" type="text" name="prodi" id="prodi">
			</div>
			<form action="aksi.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file">
				
			</form>
			<br/>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
			<a href="index.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>   