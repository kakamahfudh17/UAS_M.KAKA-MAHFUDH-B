<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:index.php");
	}else if($data['level']=="owner"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "owner";
		header("location:halaman_pegawai.php");
	}else if($data['level']=="operator_alat_berat"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "operator_alat_berat";
		header("location:halaman_pengurus.php");
	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
?>