<?php 
$id_kategori = $_GET['id_kategori'];

include '../koneksi.php';
$sql = "DELETE FROM kategoribuku Where id_kategori = '$id_kategori'";
$query	= mysqli_query($koneksi,$sql);
if ($query){
	header("Location:?url=data_kategori");
}else{
	echo "<script>alert('Maaf Data Tidak Terhapus'); window.locatin.assign('?url=data_kategori');</script>";
 }

 ?>