<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<h2>Form Edit Data</h2>
		<br>
		<div class="col-md-6">
			<?php
			include 'koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"select * from user where id='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<form method="post" action="update_user.php">

					<div class="form-group">
						<label for="username">Username</label>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input class="form-control" type="text" name="username" id="username" value="<?php echo $d['username']; ?>">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="password" id="password" value="<?php echo $d['password']; ?>">
					</div>
                    <div class="form-group">           
						<label for="email">Email</label>
						<input class="form-control" type="text" name="email" id="email" value="<?php echo $d['email']; ?>">
					</div>
					<div class="form-group">
						<label for="ttl">Tempat Tanggal Lahir</label>
						<input class="form-control" type="text" name="ttl" id="ttl" value="<?php echo $d['ttl']; ?>">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $d['alamat']; ?>">
					</div>
										
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="user.php">Kembali</a>
				</form>
				<?php 
			}
			?>
		</div>
	</div>
</body>
</html>