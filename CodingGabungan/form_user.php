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
	<h2>Tambah Data User</h2>
	<br>
	
	<?php
		include ("add_user.php");
	?>

	<div class="col-md-6">
		<form method="post" action="form_user.php" autocomplete="off">
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email">
			</div>
			<div class="form-group">   
				<label for="ttl">Tempat Tanggal Lahir</label>
				<input class="form-control" type="text" name="ttl" id="ttl">
			</div>
			<div class="form-group">   
				<label for="alamat">Alamat</label>
				<input class="form-control" type="text" name="alamat" id="alamat">
			</div>
			
			<button type="submit" name="simpen" class="btn btn-primary">Simpan</button>
			<a href="user.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>   