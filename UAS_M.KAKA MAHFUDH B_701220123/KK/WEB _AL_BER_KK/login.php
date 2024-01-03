<!DOCTYPE html>
<html>
<head>
	<title>penyewaan alat berat KK_MAHFUDH</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>HALO WELCOME TO WEBSITE PENYEWAAN ALAT BERAT</h1>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<div class="kotak_login">
		<p class="tulisan_login"><strong>SILAHKAN LOGIN</strong></p>
		<form action="cek_login.php" method="post">
			<label><strong>USERNAME</strong></label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<label><strong>PASSWORD</strong></label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
			<center>
				<a><strong>By KK_MAHFUDH</strong></a>
			</center>
		</form>
	</div>
</body>
</html>