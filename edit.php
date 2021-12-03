<?php
	include("config.php");
 
	if(isset($_POST['update'])){	
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$tlpn = $_POST['tlpn'];
		$asal_kota =$_POST['asal_kota'];
		$alamat = $_POST['alamat'];
		$paket_tour = $_POST['paket_tour'];
		$jml_dewasa = $_POST['jml_dewasa'];
		$jml_anak = $_POST['jml_anak'];
		$checkin = $_POST['checkin'];
		$checkout = $_POST['checkout'];
		$pesan = $_POST['pesan'];
		
		$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama', email='$email', tlpn='$tlpn', asal_kota='$asal_kota', 
										alamat='$alamat', paket_tour='$paket_tour', jml_dewasa='$jml_dewasa', jml_anak='$jml_anak', 
										checkin='$checkin', checkout='$checkout', pesan='$pesan' WHERE id=$id");
	
		header("Location: index.php");
	}
?>

<?php
	$id = $_GET['id'];
 
	$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
	while($user_data = mysqli_fetch_array($result)){
		$nama = $user_data['nama'];
		$email = $user_data['email'];
		$tlpn = $user_data['tlpn'];
		$asal_kota =$user_data['asal_kota'];
		$alamat = $user_data['alamat'];
		$paket_tour = $user_data['paket_tour'];
		$jml_dewasa = $user_data['jml_dewasa'];
		$jml_anak = $user_data['jml_anak'];
		$checkin = $user_data['checkin'];
		$checkout = $user_data['checkout'];
		$pesan = $user_data['pesan'];
	}
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
    
    <div id="konten"  align="center">
    <h2 class="title"> EDIT BOOKING </h2> <br> <br>
	<form name="form_booking" method="post" action="edit.php">
		<table border="0" class="tblbook">
			<tr> 
				<td class="td1">Nama Lengkap</td>
				<td><input type="text" name="nama" maxlength="100" value="<?php echo $nama; ?>"required></td>
			</tr>
			<tr> 
				<td class="td1">Email</td>
				<td><input type="text" name="email" placeholder="ex: myname@example.com" value="<?php echo $email; ?>" required></td>
			</tr>
			<tr> 
				<td class="td1">No. Telepon</td>
				<td><input type="Number" name="tlpn" maxlength="15" value="<?php echo $tlpn; ?>" required></td>
			</tr>
			<tr>
				<td class="td1">Asal Kota</td>
				<td><select name= "asal_kota" value="<?php echo $asal_kota; ?>">
					<option value="-">Pilih Kota</option>
					<?php 
						if($asal_kota=="Gianyar"){
					?>	
						<option value="Gianyar" selected>Gianyar</option>
					<?php
						} else{
					?>
						<option value="Gianyar">Gianyar</option>
					<?php
						}
						if($asal_kota=="Tabanan"){
					?>
                    	<option value="Tabanan" selected>Tabanan</option>
					<?php
						} else{
					?>
						<option value="Tabanan">Tabanan</option>
					<?php 
						}
						if($asal_kota=="Bangli"){
					?> 
						<option value="Bangli" selected>Bangli</option>
					<?php 
						} else{
					?>
						<option value="Bangli">Bangli</option>
					<?php
						}
						if($asal_kota=="Buleleng"){ ?>
						<option value="Buleleng" selected>Buleleng</option>
					<?php
						} else{
					?> 
						<option value="Buleleng">Buleleng</option>
					<?php 
						}
					?>
				 	</select></td>
			</tr>
			<tr>
				<td class="td1">Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>" required></td>
			</tr>
			<tr>
				<td class="td1">Paket Tour</td>
				<td><select name="paket_tour" value="<?php echo $paket_tour; ?>">
                	<option value="-">Pilih Paket</option>
                    <?php 
						if($asal_kota=="Komodo Tour"){
					?>	
						<option value="Komodo Tour" selected>Komodo Tour</option>
					<?php
						} else{
					?>
						<option value="Komodo Tour">Komodo Tour</option>
					<?php
						}
						if($asal_kota=="Komodo Diving"){
					?>
                    	<option value="Komodo Diving" selected>Komodo Diving</option>
					<?php
						} else{
						?>
						<option value="Komodo Diving">Komodo Diving</option>
					<?php 
						}
						if($asal_kota=="Flores Tour"){
					?> 
						<option value="Flores Tour" selected>Flores Tour</option>
					<?php 
						} else{
					?>
						<option value="Flores Tour">Flores Tour</option>
					<?php 
						}
					?>
					</select></td>
			</tr>
            <tr> 
				<td class="td1">Jumlah</td>
				<td><input type="number" name="jml_dewasa" value="<?php echo $jml_dewasa; ?>" placeholder="Dewasa" required>
                	<input type="number" name="jml_anak" value="<?php echo $jml_anak; ?>" placeholder="Anak"></td>
			</tr>
			<tr>
				<td class="td1">Tgl Check In</td>
				<td><input type="date" name="checkin" value="<?php echo $checkin; ?>" required></td>
			</tr>
			<tr>
				<td class="td1">Tgl Check Out</td>
				<td><input type="date" name="checkout" value="<?php echo $checkout; ?>" required></td>
			</tr>
            <tr>
				<td class="td1">Pesan</td>
				<td><input type="text" name="pesan" value="<?php echo $pesan; ?>" required></td>
			</tr>
			<tr>
				<td class="td1"><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td ><input type="submit" name="update" value="UPDATE" class="btnsub">
                	<a href="index.php" class="btnlist"> Cancel </a></td>
			</tr>
		</table>
	</form>
	</div>
		
    <br>
	<div id="footer" align="center">
		@Kelompok 7 <br> 2018
	</div>		
</body>
</html>
