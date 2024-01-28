<?php 

$foto = $_FILES['gambar']['name'];
$tmpname = $_FILES['gambar']['tmp_name'];
$extension = explode('.', $foto);
$newfilename = uniqid().'.'.end($extension);
move_uploaded_file($tmpname, '../asset/'.$newfilename);

$id_buku = $_GET['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];


include '../koneksi.php';
$sql = "UPDATE buku SET gambar='$newfilename', judul = '$judul', penulis = '$penulis',penerbit = '$penerbit',tahun = '$tahun'where id_buku = '$id_buku'";

$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=data_buku");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=data_buku');</script>";
 }
 ?>

