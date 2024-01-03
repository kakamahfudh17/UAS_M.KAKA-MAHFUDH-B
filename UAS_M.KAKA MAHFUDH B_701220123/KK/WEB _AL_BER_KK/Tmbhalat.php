<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <li class=" active"><a href="DataAlat.php">DATA ALAT BERAT</a></li>
                <li ><a href="AlatBerat.php">DAFTAR ALAT BERAT</a></li>
                <li><a  href="penyewaan.php">PENYEWAAN</a></li>
                <li><a href="laporan.php">LAPORAN PENYEWAAN</a></li>
                <li ><a href="pengguna.php">PENGGUNA</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
              </ul>
              
      </div>


    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3>Tambah data alat</h3>
                <a href="DataAlat.php" class="btn btn-primary">Kembali</a>
                <hr>

                <form action="" method="post">
                    <p>
                        Nama Alat Berat: <input type="text" name="Nama" class="form-control"/>
                    </p>
                    <p>
                        Stok : <input type="text" name="Stok" class="form-control">
                    </p>
                    <p>
                        Harga Sewa : <input type="text" name="Harga_Sewa" class="form-control">
                    </p>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
                <?php
                if (isset($_POST['Nama'])) {
                    include_once "koneksi.php";

                    $Nama = $_POST['Nama'];
                    $Stok = $_POST['Stok'];
                    $Harga_Sewa = $_POST['Harga_Sewa'];


                    $sql = "INSERT INTO data_alat VALUES('$Nama','$Stok', '$Harga_Sewa')";
                    mysqli_query($koneksi, $sql);

                    header('location:DataAlat.php');
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>