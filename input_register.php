<?php 
$user = $_POST['user'];
$pass = $_POST['pass'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$level = 'peminjam';



include 'koneksi.php';
$sql = "INSERT INTO user(username,password,nama_lengkap,email,alamat,level) VALUES ('$user','$pass','$nama','$email','$alamat','$level')";
$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:index.php");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('register.php');</script>";
 }
 ?>

