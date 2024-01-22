<?php 
$id_koleksi = $_GET['id_koleksi'];

include '../koneksi.php';
$sql = "DELETE FROM koleksipribadi Where id_koleksi = '$id_koleksi'";
$query	= mysqli_query($koneksi,$sql);
if ($query){
	header("Location:?url=koleksi_buku");
}else{
	echo "<script>alert('Maaf Data Tidak Terhapus'); window.locatin.assign('?url=koleksi_buku');</script>";
 }

 ?>