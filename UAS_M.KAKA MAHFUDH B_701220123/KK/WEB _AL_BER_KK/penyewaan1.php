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
                <li ><a href="halaman_pegawai.php">HOME</a></li>
                <li ><a href="konsumen1.php">KONSUMEN</a></li>
                <li ><a href="DataAlat1.php">DATA ALAT BERAT</a></li>
                <li ><a href="AlatBerat1.php">DAFTAR ALAT BERAT</a></li>
                <li class= "active"><a  href="penyewaan1.php">PENYEWAAN</a></li>
                <li><a href="laporan1.php">LAPORAN PENYEWAAN</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
              </ul>
              
      </div>

    <div class="container mt-3">
      <div class="row">
        <div class="col-6">
          <h4><strong>DATA PENYEWAAN</strong></h4>
        </div>
        <div class="col-6 text-end">
            <a href="laporan-cetak.php" class="btn btn-primary" target="_blank"> Cetak Laporan</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td><strong>NAMA KONSUMEN</strong></td>
                        <td><strong>ALAT BERAT</strong></td>
                        <td><strong>LAMA SEWA</strong></td>
                        <td><strong>TANGGAL SEWA</strong></td> 
                    </tr>
                </thead>
                <tbody> <?php 
                  include_once "koneksi.php";

                  $sql = "select * from penyewaan";
                  $query = mysqli_query($koneksi,$sql);

                  while($baris = mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                          <td><?php echo $baris['Nama'] ?></td>
                          <td><?php echo $baris['Alat_Berat'] ?></td>
                          <td><?php echo $baris['Lama_Sewa'] ?></td>
                          <td><?php echo $baris['Tanggal_Sewa'] ?></td>
                          
                      </tr>
                  <?php } ?>
                <tbody>
                   