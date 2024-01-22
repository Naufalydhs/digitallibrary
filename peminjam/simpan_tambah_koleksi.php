<?php 
session_start();
$id_user = $_SESSION['id_user'];
$id_buku = $_GET['id_buku'];



include '../koneksi.php';
$sql = "INSERT INTO koleksipribadi(id_user,id_buku) VALUES ('$id_user','$id_buku')";
$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=koleksi_buku");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=koleksi_buku');</script>";
 }
 ?>