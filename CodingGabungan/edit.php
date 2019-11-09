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
			$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<form method="post" action="update.php">

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input class="form-control" type="text" name="nama" id="nama" value="<?php echo $d['nama']; ?>">
					</div>
					<div class="form-group">
						<label for="nim">Nim</label>
						<input class="form-control" type="text" name="nim" id="nim" value="<?php echo $d['nim']; ?>">
					</div>
					<div class="form-group">
						<label for="ttl">Tempat Tanggal Lahir</label>
						<input class="form-control" type="text" name="ttl" id="ttl" value="<?php echo $d['ttl']; ?>">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $d['alamat']; ?>">
					</div>
					<div class="form-group">
						<label for="smt">Semester</label>
						<input class="form-control" type="text" name="smt" id="smt" value="<?php echo $d['smt']; ?>">
					</div>
					<div class="form-group">
						<label for="prodi">Prodi</label>
						<input class="form-control" type="text" name="prodi" id="prodi" value="<?php echo $d['prodi']; ?>">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="index.php">Kembali</a>
				</form>
				<?php 
			}
			?>
		</div>
	</div>
</body>
</html>