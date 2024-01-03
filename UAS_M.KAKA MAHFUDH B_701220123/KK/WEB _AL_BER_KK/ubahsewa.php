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
    include_once "koneksi.php";
    $Nama = $_GET['Nama'];
    $sql = "SELECT * FROM penyewaan WHERE Nama = '$Nama' ";
    $query = mysqli_query($koneksi, $sql); 
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3><strong>UBAH DATA SEWA</strong></h3>
                <a href="penyewaan.php" class="btn btn-primary">Kembali</a>
                <hr>

                <form action="" method="post" enctype="multipart/form-data">
                    <p>
                        Nama : <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>" class="form-control">
                    </p>
                    <p>
                        Alat Berat : <input type="text" name="Alat_Berat" value="<?php echo $data['Alat_Berat'] ?>" class="form-control" >
                    </p>
                    <p>
                        Lama Sewa : <input type="text" name="Lama_Sewa" value="<?php echo $data['Lama_Sewa'] ?>" class="form-control">
                    </p>
                    <p>
                        Tanggal Sewa: <input type="Date" name="Tanggal_Sewa" value="<?php echo $data['Tanggal_Sewa'] ?>" class="form-control">
                    </p>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['Nama'])) {
    include "koneksi.php";

    $Nama = $_POST['Nama'];
    $Alat_Berat = $_POST['Alat_Berat'];
    $Lama_Sewa =$_POST['Lama_Sewa'];
    $Tanggal_Sewa=$_POST['Tanggal_Sewa'];
    $sql = "UPDATE penyewaan SET Alat_Berat ='$Alat_Berat', Lama_Sewa='$Lama_Sewa', Tanggal_Sewa ='$Tanggal_Sewa' WHERE Nama ='$Nama'";

    mysqli_query($koneksi, $sql);
    header('location: penyewaan.php');
}

?>