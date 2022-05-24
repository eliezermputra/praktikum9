<?php 
include 'cekkoneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn,"SELECT * FROM datalogin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "datalogin";
	header("location:cetak.php");
}else{
	header("location:tampilan.php?pesan=gagal");
}
?>