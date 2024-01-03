<?php
    include "koneksi.php";
    $Id = $_GET['Id'];
    $sql = "DELETE FROM konsumen WHERE Id = '$Id'";
    $query = mysqli_query($koneksi, $sql);
    header('location:konsumen.php');