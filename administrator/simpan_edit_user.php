<?php 
$id_user = $_GET['id_user'];
$username = $_POST['user'];
$password = $_POST['pass'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];

include '../koneksi.php';
$sql = "UPDATE user SET username = '$username', password = '$password',nama_lengkap = '$nama',email = '$email',alamat = '$alamat',level='$level' where id_user = '$id_user'";

$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=user");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=user');</script>";
 }
 ?>

