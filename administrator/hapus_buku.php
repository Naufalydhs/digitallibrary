<?php 
$id_buku = $_GET['id_buku'];

include '../koneksi.php';
$data = mysqli_query ($koneksi, "SELECT * FROM buku WHERE id_buku = '$id_buku'") ;
$row = mysqli_fetch_array($data) ;

$gambar = $row['gambar'] ;
if(file_exists('../asset/'.$gambar))
	{
		unlink('../asset/'.$gambar) ;
	}
	
$sql = "DELETE FROM buku Where id_buku = '$id_buku'";
$query	= mysqli_query($koneksi,$sql);

if ($query){
	header("Location:?url=data_buku");
}else{
	echo "<script>alert('Maaf Data Tidak Terhapus'); window.locatin.assign('?url=data_buku');</script>";
 }

 ?>