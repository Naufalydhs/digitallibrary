<?php 
$id_user = $_GET['id_user'];

include '../koneksi.php';
$sql = "DELETE FROM user Where id_user = '$id_user'";
$query	= mysqli_query($koneksi,$sql);
if ($query){
	header("Location:?url=user");
}else{
	echo "<script>alert('Maaf Data Tidak Terhapus'); window.locatin.assign('?url=user');</script>";
 }

 ?>