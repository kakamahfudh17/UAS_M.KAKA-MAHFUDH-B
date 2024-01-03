<?php
    include "koneksi.php";
    $Nama = $_GET['Nama'];
    $sql = "DELETE FROM penyewaan WHERE Nama = '$Nama'";
    $query = mysqli_query($koneksi, $sql);
    header('location:penyewaan.php');