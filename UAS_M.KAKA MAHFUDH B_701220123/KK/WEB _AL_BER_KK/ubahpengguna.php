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
    $pw = $_GET['pw'];
    $sql = "SELECT * FROM user WHERE pw = '$pw' ";
    $query = mysqli_query($koneksi, $sql); 
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3>Ubah Data</h3>
                <a href="pengguna.php" class="btn btn-primary">Kembali</a>
                <hr>

                <form action="" method="post" enctype="multipart/form-data">
                    <p>
                        Username : <input type="text" name="Username" value="<?php echo $data['Username'] ?>" class="form-control">
                    </p>
                    <p>
                        Email : <input type="text" name="Email" value="<?php echo $data['Email'] ?>" class="form-control" >
                    </p>
                    <p>
                        pw : <input type="text" name="pw" value="<?php echo $data['pw'] ?>" class="form-control">
                    </p>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['pw'])) {
    include_once "koneksi.php";

    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $pw =$_POST['pw'];
    $sql = "UPDATE user SET Username='$Username', Email='$Email' WHERE pw ='$pw'";

    mysqli_query($koneksi, $sql);
    header('location: pengguna.php');
}

?>