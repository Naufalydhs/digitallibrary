<?php 
$username = $_POST['user'];
$password = $_POST['pass'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];

include '../koneksi.php';
$sql = "INSERT INTO user(username,password,nama_lengkap,email,alamat,level) VALUES ('$username','$password','$nama','$email','$alamat','$level')";
$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=user");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=user');</script>";
 }
 ?>

