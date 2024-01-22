<?php 
$id_buku = $_POST['judul'];
$id_kategori = $_POST['kategori'];


include '../koneksi.php';
$sql = "INSERT INTO kategoribuku_relasi(id_buku,id_kategori) VALUES ('$id_buku','$id_kategori')";
$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=data_relasi");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=data_relasi');</script>";
 }
 ?>