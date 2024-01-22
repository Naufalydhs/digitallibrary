<?php 
$id_kategori = $_GET['id_kategori'];
$kategori = $_POST['kategori'];


include '../koneksi.php';
$sql = "UPDATE kategoribuku SET nama_kategori = '$kategori' WHERE id_kategori='$id_kategori'";

$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=data_kategori");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=data_kategori');</script>";
 }
 ?>

