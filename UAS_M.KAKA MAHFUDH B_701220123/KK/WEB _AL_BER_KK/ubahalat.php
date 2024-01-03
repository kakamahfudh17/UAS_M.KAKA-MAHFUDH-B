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
    $Nama = $_GET['Nama'];
    $sql = "SELECT * FROM data_alat WHERE Nama = '$Nama' ";
    $query = mysqli_query($koneksi, $sql); 
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3><strong>UBAH DATA ALAT</strong></h3>
                <a href="konsumen.php" class="btn btn-primary">Kembali</a>
                <hr>

                <form action="" method="post" enctype="multipart/form-data">
                    <p>
                        Nama Alat berat: <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>" class="form-control">
                    </p>
                    <p>
                        Stok : <input type="number" name="Stok" value="<?php echo $data['Stok'] ?>" class="form-control" >
                    </p>
                    <p>
                        Harga Sewa : <input type="text" name="Harga_Sewa" value="<?php echo $data['Harga_Sewa'] ?>" class="form-control">
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
    include_once "koneksi.php";

    $Nama = $_POST['Nama'];
    $Stok = $_POST['Stok'];
    $Harga_Sewa =$_POST['Harga_Sewa'];
    $No_hp=$_POST['No_hp'];
    $sql = "UPDATE data_alat SET Stok ='$Stok', Harga_Sewa='$Harga_Sewa' WHERE Nama ='$Nama'";

    mysqli_query($koneksi, $sql);
    header('location: DataAlat.php');
}

?>