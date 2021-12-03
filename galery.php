<?php
include 'config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
 
?>
<html>

<head>
	<title>GALERY</title>
	<link rel="stylesheet" type="text/css" href="menubar.css">
</head>

<body>
	<nav>
    	<ul>
       		<li><a href="menubar.php">Home</a></li>
       		<li><a href="About.php">About</a></li>
        	<li><a href="galery.php">Gallery</a></li>
		 	<li><a href="add.php">Booking</a></li> <br>
			<a id="btn_logout" padding-right="100px" href="logout.php">Logout</a>
    	</ul>
	</nav>

	<div id="header" align="center">
		<h1>SAPTA TOUR & TRAVEL</h1>
		<hr size="2px" color="white">
		Jalan Tukad Pakerisan No 97 Panjer, Denpasar
	</div>
        
	<div id="konten" align="center">
		<a href="a1.jpg" target="_blank"><img src="a1.jpg" width="260" height="180" align="center-left"></a>
		<a href="b.jpg" target="_blank"><img src="b.jpg" width="260" height="180" align="center-left" >
		<a href="c.jpg" target="_blank"><img src="c.jpeg" width="260" height="180" align="center-right" >
		<a href="d.jpg" target="_blank"><img src="d.jpg" width="260" height="180" align="center-right">
        <br/>
		<a href="e.jpg" target="_blank"><img src="e.jpg" width="260" height="180" align="center-left" ></a>
		<a href="f.jpg" target="_blank"><img src="f.jpg" width="260" height="180" align="center-left"></a>
		<a href="g.jpg" target="_blank"><img src="g.jpg" width="260" height="180" align="center-right" ></a>
		<a href="h.jpg" target="_blank"><img src="h.jpg" width="260" height="180" align="center-right" ></a>
		<br>
	</div>

	<br>
	<div id="footer" align="center">
		@Kelompok 7 <br> 2018
	</div>
</body>

</html>