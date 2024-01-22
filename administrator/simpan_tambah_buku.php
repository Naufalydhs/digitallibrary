<?php 

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

$filename = $_FILES['gambar']['name'];
$tmpname = $_FILES['gambar']['tmp_name'];
move_uploaded_file($tmpname, '../asset/'.$filename);


include '../koneksi.php';
$sql = "INSERT INTO buku(gambar,judul,penulis,penerbit,tahun) VALUES ('$filename','$judul','$penulis','$penerbit','$tahun')";
$query = mysqli_query ($koneksi,$sql);

if ($query){
	header("Location:?url=data_buku");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=data_buku');</script>";
 }
 ?>

