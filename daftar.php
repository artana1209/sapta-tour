<html>
<head>
  <title>Pendaftaran</title>
  	<style>
		.judul{
			text-align: center;
			color: #eee;
			font-weight: normal;
		}

		.daftar{
			width: 350px;
			background: #167E0E;
			margin: 150px auto;
			padding: 10px 20px 50px 20px;
			border-radius: 5px;
			box-shadow: 0px 10px 20px 0px #D1D1D1;
		}

		body{
			background-image : url("c.jpeg");
		}
		
		.form{
				width: 200px;
				margin: 5px;	
				margin-left: 68px;
				border: none;
				font-size: 10pt;
				text-align : center;
				padding: 5px;
		}
		
		.button{
				background: #6699ff;
				border-top: none;
				border-right: none;
				border-left: none;
				border-radius: 5px;
				padding: 5px 15px;
				margin-left: 130px;
				margin-top: 10px;
				color: #330000;
				font-size: 10pt;
		}
  	</style>
</head>

<body>
	<div class="daftar" align="center" >
    <h2 class= "judul"> PENDAFTARAN </h2>
	<form method="post" name="form_daftar" class="judul" id="login_form" action="proses_daftar.php">
		<table>
		<tr>
			<td><input type="text" name="nama" class="form" placeholder="Nama Lengkap"></td>
		</tr>
		<tr>
			<td><input type="text" name="email" class="form" placeholder="Email"></td>
		</tr>
		<tr>
			<td><input type="text" name="username" class="form" placeholder="Username"></td>
		</tr>
		<tr>
			<td><input type="password" name="password" class="form" placeholder="Password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" class="button" value="DAFTAR"></td>
		</tr>
		</table>
			<br>
			<td colspan=3 class="judul">Sudah punya akun? Login <a href="login.php">disini</a></td>
	</form>
</body>
</html>