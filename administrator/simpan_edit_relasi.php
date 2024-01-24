<?php 
$id_relasi = $_GET['id_kategoribuku'];
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];


include '../koneksi.php';
$sql = "UPDATE kategoribuku_relasi SET id_kategori = '$kategori', id_buku
 = '$judul' WHERE id_kategoribuku='$id_relasi'";

$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=data_relasi");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=data_relasi');</script>";
 }
 ?>

