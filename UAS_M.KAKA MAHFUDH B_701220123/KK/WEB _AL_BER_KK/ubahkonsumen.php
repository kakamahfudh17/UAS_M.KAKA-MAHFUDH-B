<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Penyewaan Alat Berat By KK_MAHFUDH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
<hr>
<?php
    include "koneksi.php";
    $Id = $_GET['Id'];
    $sql = "SELECT * FROM konsumen WHERE Id = '$Id'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3><strong>UBAH DATA KONSUMEN</strong></h3>
                <a href="konsumen.php" class="btn btn-primary">Kembali</a>
                <hr>

                <form action="" method="post" enctype="multipart/form-data">
                    <p>Id : <input type="text" name="Id" value="<?php echo $data['Id'] ?>" class="form-control"></p>
                    <p>Nama : <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>" class="form-control"></p>
                    <p>Email : <input type="text" name="Email" value="<?php echo $data['Email'] ?>" class="form-control" ></p>
                    <p>alamat : <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control"></p>
                    <p>No_hp : <input type="text" name="No_hp" value="<?php echo $data['No_hp'] ?>" class="form-control"></p>
                    <select class="form-select" type="text" name="Gender" aria-label="Default select example">
                      <option selected>PILIH GENDER</option>
                      <option value="1">LAKI-LAKI</option>
                      <option value="2">PEREMPUAN</option>
                    </select>
                    <select class="form-select" type="text" name="alber_sewa"  aria-label="Default select example">
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
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['Id'])) {
    include_once "koneksi.php";
    $Id = $_POST['Id'];
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $alamat =$_POST['alamat'];
    $No_hp=$_POST['No_hp'];
    $Gender = $_POST['Gender'];
    $alber_sewa = $_POST['alber_sewa'];
    $jum_unit = $_POST ['jum_unit'];
    $gambar = $_POST ['gambar'];
    $sql = "UPDATE konsumen SET jum_unit= '$jum_unit',alber_sewa='$alber_sewa', Gender ='$Gender', alamat='$alamat', No_hp ='$No_hp', Email ='$Email', Nama ='$Nama' WHERE Id='$Id'";

    mysqli_query($koneksi, $sql);
    header('location: konsumen.php');
}

?>