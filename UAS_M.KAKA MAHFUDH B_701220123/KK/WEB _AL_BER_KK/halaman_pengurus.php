<!DOCTYPE html>
<html>
<head>
    <title>WEB Penyewaan Alat Berat By KK_MAHFUDH</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	
	<header>
        <div class="ikan">
          <h1><a href="halaman_pengurus.php"><strong>APLIKASI PENYEWAAN ALAT BERAT</strong></a></h1>
        </div>
     </header>

      <div class="sapi">
              <ul >
                <li class=" active" ><a href="halaman_pengurus.php">HOME</a></li>
                <li ><a class="" href="konsumen2.php">KONSUMEN</a></li>
                <li><a class="" href="DataAlat2.php">DATA ALAT BERAT</a></li>
                <li><a class="" href="penyewaan2.php">PENYEWAAN</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
              </ul>
              
      </div>

	    <section class="banner">
        <h2><strong>WELCOME TO WEBSITE PENYEWAAN ALAT BERAT</strong></h2>
      </section>

      <footer>
          <div class="obat">
              <strong>UAS PEMOGRAMAN WEB 2 @KAKA_MAHFUDH.2K23</strong>
          </div>
      </footer>

</body>
</html>