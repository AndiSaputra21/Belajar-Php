<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM mahasiswa where id = '$id' ") or die(mysqli_error($conn));

if ($query) {
	# code...
	echo "<script>alert('Data Berhasil ditambah');
		window.location='index.php';</script>";
}else{
	echo "<script>alert('Data Gagal !!!');</script>";
}
?>