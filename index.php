<?php
	// Membuat koneksi database menggunakan file config
	include_once("config.php");
 
	// Mengambil semua data dari database
	$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
	<title>BOOKING</title>
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
	<a href="add.php" class="linkadd">Add New Data</a><br/><br/><br/>
	    <table width='80%' border="1" class="tblview" cellpadding="0" cellspacing="0">
		    <tr>
        		<th>Nama</th> <th>Telepon</th> <th>Email</th> <th>Asal Kota</td> <th>Alamat</th> <th>Paket Tour</th> <th>Jumlah Dewasa</th> 	
                <th>Jumlah Anak</th> <th>Tgl Check In</th> <th>Tgl Check Out</th> <th>Pesan</th> <th>Update</th>
    		</tr>
    		
			<?php  
    			while($user_data = mysqli_fetch_array($result)) {         
        			echo "<tr>";
        			echo "<td>".$user_data['nama']."</td>";
        			echo "<td>".$user_data['tlpn']."</td>";
        			echo "<td>".$user_data['email']."</td>";
					echo "<td>".$user_data['asal_kota']."</td>";
					echo "<td>".$user_data['alamat']."</td>";
					echo "<td>".$user_data['paket_tour']."</td>";
					echo "<td>".$user_data['jml_dewasa']."</td>";
					echo "<td>".$user_data['jml_anak']."</td>";
					echo "<td>".$user_data['checkin']."</td>";
					echo "<td>".$user_data['checkout']."</td>";
					echo "<td>".$user_data['pesan']."</td>";
        			echo "<td><a href='edit.php?id=$user_data[id]' class='linkedit'>Edit</a><a class='linkhapus' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";       			}
    		?>
    	</table>
	</div>
		
    <br>
	<div id="footer" align="center">
		@Kelompok 7 <br> 2018
	</div>		
</body>

</html>