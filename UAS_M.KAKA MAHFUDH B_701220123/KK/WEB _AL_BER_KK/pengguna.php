<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEB Penyewaan Alat Berat By KK_MAHFUDH</title>
    <link rel="stylesheet"  href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>

    <header>
        <div class="ikan">
          <h1><a href="index.php"><strong>APLIKASI PENYEWAAN ALAT BERAT</strong></a></h1>
        </div>
     </header>

      <div class="sapi">
              <ul >
                <li ><a href="index.php">HOME</a></li>
                <li ><a href="konsumen.php">KONSUMEN</a></li>
                <li ><a href="DataAlat.php">DATA ALAT BERAT</a></li>
                <li ><a href="AlatBerat.php">DAFTAR ALAT BERAT</a></li>
                <li><a  href="penyewaan.php">PENYEWAAN</a></li>
                <li><a href="laporan.php">LAPORAN PENYEWAAN</a></li>
                <li class=" active"><a href="pengguna.php">PENGGUNA</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
              </ul>
              
      </div>
    <div class="container mt-3">
      <div class="row">
        <div class="col-6">
          <h4><strong>DATA USER</strong></h4>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td><strong>ID</strong></td>
                        <td><strong>USERNAME</strong></td>
                        <td><strong>PASSWORD</strong></td>
                        <td><strong>JABATAN</strong></td>
                    </tr>
                </thead>
                <tbody> <?php 
                  include_once "koneksi.php";

                  $sql = "select * from user";
                  $query = mysqli_query($koneksi,$sql);

                  while($baris = mysqli_fetch_array($query)) {
                  ?>
                      <tr>
                          <td><?php echo $baris['id'] ?></td>
                          <td><?php echo $baris['username'] ?></td>
                          <td><?php echo $baris['password'] ?></td>
                          <td><?php echo $baris['level'] ?></td>
                      </tr>
                  <?php } ?>
                <tbody>
                   