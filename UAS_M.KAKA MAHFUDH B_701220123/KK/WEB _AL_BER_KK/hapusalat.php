<?php
    include "koneksi.php";
    $Nama = $_GET['Nama'];
    $sql = "DELETE FROM data_alat WHERE Nama = '$Nama'";
    $query = mysqli_query($koneksi, $sql);
    header('location:DataAlat.php');