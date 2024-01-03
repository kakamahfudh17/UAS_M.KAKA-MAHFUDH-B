<!DOCTYPE html>
<html>
<head>
    <title>WEB Penyewaan Alat Berat By KK_MAHFUDH</title>
    <link rel="stylesheet"  href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
 
    <?php 
    include 'koneksi.php';
    ?>
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
                <li><a  href="penyewaan1.php">PENYEWAAN</a></li>
                <li class=" active"><a href="laporan1.php">LAPORAN PENYEWAAN</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
              </ul>
              
      </div>
      <br>
    <CENTER><h4><strong>PENCARIAN DATA LAPORAN PENYEWAAN</strong></h4></CENTER>
    <div class="container mt-4">
    <form method="get">
        <label><strong>PILIH TANGGAL AWAL</strong></label>
        <input type="date" name="tanggal_awal" class="form-control">
        <label><strong>PILIH TANGGAL AKHIR</strong></label>
        <input type="date" name="tanggal_akhir" class="form-control">
        <input type="submit" value="cari" class="btn btn-primary">
    </form>
 
    <br/> 
 
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
                <tbody> 
        <?php 
        

        if(isset($_GET['tanggal_awal']) && isset($_GET['tanggal_akhir'])){
            $tgl_awal = $_GET['tanggal_awal'];
            $tgl_akhir = $_GET['tanggal_akhir'];
            $sql = mysqli_query($koneksi, "SELECT * FROM penyewaan WHERE Tanggal_Sewa BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        } else {
            $sql = mysqli_query($koneksi, "SELECT * FROM penyewaan");
        }
        
        while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Alat_Berat']; ?></td>
            <td><?php echo $data['Lama_Sewa']; ?></td>
            <td><?php echo $data['Tanggal_Sewa']; ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
 
</body>
</html>