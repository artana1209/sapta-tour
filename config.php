<?php
	$databaseHost = 'localhost';
	$databaseName = 'register_db';
	$databaseUsername = 'root';
	$databasePassword = '';
 
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>

<?php
	mysql_connect("localhost","root","") or die ("Gagal Terhubung Ke Database");
	mysql_select_db("register_db") or die ("Database Tidak Ditemukan");
?>
