<?php
    include "koneksi.php";
    $pw = $_GET['pw'];
    $sql = "DELETE FROM user WHERE pw = '$pw'";
    $query = mysqli_query($koneksi, $sql);
    header('location:pengguna.php');