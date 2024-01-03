<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>WEB Penyewaan Alat Berat By KK_MAHFUDH</title>
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
                <li class=" active"><a href="konsumen.php">KONSUMEN</a></li>
                <li><a href="DataAlat.php">DATA ALAT BERAT</a></li>
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
                <h3><strong>TAMBAH DATA KONSUMEN</strong></h3>
                <a href="konsumen.php" class="btn btn-primary">Kembali</a>
                <hr>

                <form action="" method="post" enctype="multipart/form-data">
                    <p>Id : <input type="text" name="Id" class="form-control"/></p>
                    <p>Nama : <input type="text" name="Nama" class="form-control"/></p>
                    <p>Email : <input type="text" name="Email" class="form-control"></p>
                    <p>alamat : <input type="text" name="alamat" class="form-control"></p>
                    <p>No_hp : <input type="number" name="No_hp" class="form-control"></p>
                    <select class="form-select" type="text" name="Gender" aria-label="Default select example">
                      <option selected>PILIH GENDER</option>
                      <option value="1">LAKI-LAKI</option>
                      <option value="2">PEREMPUAN</option>
                    </select>
                    <select class="form-select" type="text" name="alber_sewa" aria-label="Default select example">
                      <option selected>JENIS ALAT BERAT</option>
                      <option value="1">BULLDOZER</option>
                      <option value="2">EXCAVATOR</option>
                      <option value="3">GRADER</option>
                      <option value="4">ROLLER / STUMBAL</option>
                      <option value="5">TRUCK CRANE</option>
                      <option value="6">DUMP TRUCK</option>
                    </select>
                    <select class="form-select" type="text" name="jum_unit" aria-label="Default select example">
                      <option selected>jumlah unit</option>
                      <option value="1">1 unit</option>
                      <option value="2">2 unit</option>
                      <option value="3">3 unit</option>
                      <option value="4">4 unit</option>
                      <option value="5">5 unit</option>
                      <option value="6">6 unit</option>
                      <option value="7">7 unit</option>
                      <option value="8">8 unit</option>
                      <option value="9">9 unit</option>
                      <option value="10">10 unit</option>
                    </select>
                    <p>gambar : <input type="text" name="gambar" class="form-control"></p>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
                <?php
                if (isset($_POST['Id'])) {
                    include_once "koneksi.php";
                    $Id = $_POST['Id'];
                    $Nama = $_POST['Nama'];
                    $Email = $_POST['Email'];
                    $alamat = $_POST['alamat'];
                    $No_hp = $_POST['No_hp'];
                    $Gender = $_POST['Gender'];
                    $alber_sewa = $_POST['alber_sewa'];
                    $jum_unit = $_POST['jum_unit'];
                    $gambar = $_POST['gambar'];

                    $sql = "INSERT INTO konsumen VALUES('$Id','$Nama','$Email', '$alamat', '$No_hp', '$Gender', '$alber_sewa','$jum_unit','$gambar')";
                    mysqli_query($koneksi, $sql);

                    header('location:konsumen.php');
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>