<?php 
$kategori = $_POST['kategori'];



include '../koneksi.php';
$sql = "INSERT INTO kategoribuku(nama_kategori) VALUES ('$kategori')";
$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=data_kategori");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=data_kategori');</script>";
 }
 ?>

