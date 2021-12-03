<?php
	// Termasuk koneksi file database
	include_once("config.php");
 
	// Menggunakan metode get id dari link untuk menghapus data
	$id = $_GET['id'];
 
	// Menghapus data perbaris dari tabel berdasarkan id
	$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
 
	// Setelah data terhapus, maka data terakhir akan ditampilkan
	header("Location:index.php");
?>
