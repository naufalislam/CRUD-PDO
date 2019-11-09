<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Mahasiswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">User</a>
      </li>
     </ul>
   </div>
</nav>

<div class="container">
	<br>
	<h2>Data Mahasiswa</h2>
	<br>
	<!-- <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> -->
	<a href="form_mahasiswa.php" class="btn btn-primary" >Tambah Data</a>
	<br><br>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Tempat Tanggal Lahir</th>
            <th>Alamat</th>
			<th>Semester</th>
			<th>Prodi</th>
			<th>Foto</th>
            <th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['ttl']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['smt']; ?></td>
				<td><?php echo $d['prodi']; ?></td>
				<td><img src="img/<?php echo $d['poto']?>" height="50px" width="50px;"></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>
</div>
</body>
</html>
