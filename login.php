<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  	<style>
		.judul{
			text-align: center;
			color: #eee;
			font-weight: normal;

		}

		.login{
			width: 300px;
			background: #0455BF;
			margin: 150px auto;
			padding: 10px 20px 50px 20px;
			border-radius: 5px;
			box-shadow: 0px 10px 20px 0px #D1D1D1;
		}

		body{
			background-image : url("c.jpeg");
		}
		
		.form{
				width: 150px;
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
				margin-left: 65px;
				margin-top: 10px;
				color: #330000;
				font-size: 10pt;
		}
  	</style>
</head>

<body>   
	<?php 
        if(isset($_GET["login_error"])){
            echo "<script>alert('Username atau Password Salah!')</script>";
        }
    ?>
    
	<div class="login" align="center" >
    	<h2 class= "judul"> LOGIN TO WEB </h2>
        <form method="POST" action="cek_login.php" name="login_form" class="judul" id="login_form">
        	<table>
            	<tr>
					<td><input type="text" name="username" class="form" placeholder="Username"></td>
                </tr>
                <tr>
                	<td><input type="password" name="password" class="form" placeholder="Password"></td>
                </tr>
                <tr>
					<td><input type="submit" name="login" class="button" value="LOGIN"></td>
                </tr>
            </table>
				<br>
				<td colspan=3 class="judul">Belum punya akun? Daftar <a href="daftar.php">disini</a></td>
      	</form>
	</div> 
</body>

</html> 