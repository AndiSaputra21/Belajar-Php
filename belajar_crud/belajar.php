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
	<table class="table">
		<thead>
			<tr>
				<th>NO.</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No. Telp</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$query = mysqli_query($conn, "SELECT * FROM Mahasiswa") or die (myswli_error($conn));
				while ($data = mysqli_fetch_array($query)) {?>
					
				}
		</tbody>
	</table>
</body>
</html>