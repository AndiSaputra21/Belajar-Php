<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-sacle=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h1><center><strong>DATA MAHASISWA</strong></center></h1>
	<div class="container">
		<a href="form_tambah.php" class="btn btn-success">+ Tambah Data Baru</a>
	</div>
		<br>
		<br>
	<table class="table">
		<thead>
			<tr>
				<th>NO.</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No.Telp</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
				include "koneksi.php";
				$query = mysqli_query($conn, "SELECT * FROM mahasiswa") or die (mysqli_error($conn));
				$nomor = 1;
				while ($data = mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $data['npm'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['alamat'] ?></td>
						<td><?php echo $data['telp'] ?></td>
						<td><?php echo $data['jurusan'] ?></td>
						<td colspan=2>
							<a href="form_edit.php?id=<?php echo $data['id'];?> " class="btn btn-primary">Edit</a>
							<a href="proses_hapus.php?id=<?php echo $data['id']?>" class="btn btn-danger"onclick="return confirm('Yakin Mau Hapus Data')">Hapus</a>
						</td>
					</tr>
					
			<?php }	?>
		</tbody>
	</table>
</div>
</body>
</html>