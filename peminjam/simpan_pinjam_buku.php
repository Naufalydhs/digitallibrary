<?php 
$user = $_SESSION['id_user'];
$id_buku = $_GET['id_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$status = 'pinjam';


include '../koneksi.php';
$sql = "INSERT INTO peminjaman (id_user, id_buku,tanggalpeminjaman, tanggalpengembalian, statuspeminjaman) VALUES ('$user','$id_buku','$tanggal_pinjam','$tanggal_kembali','$status')";
$query = mysqli_query ($koneksi,$sql);
if ($query){
	header("Location:?url=pinjam");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=pinjam');</script>";
 }
 ?>