<?php 
include '../koneksi.php';
$id_buku = $_GET['id_buku'];
$user = $_SESSION['id_user'];
$sql = "SELECT*FROM user, buku where id_buku = '$id_buku' AND id_user = '$user'";
$query = mysqli_query ($koneksi, $sql);
$data = mysqli_fetch_array ($query);
?>


<h5>Tanggal Peminjaman Buku</h5>
<a href="?url=pinjam_buku" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=simpan_pinjam_buku&id_buku=<?=$data['id_buku'];?>">
	<div class="form-group mb-2">
		<label>Nama Peminjam</label>
		<input value = "<?=$data['nama_lengkap']?>" type="text" name="nama"  class="form-control" disabled>
	</div>
	<div class="form-group mb-2">
		<label>Judul</label>
		<input value = "<?=$data['judul']?>" type="text" name="judul"  class="form-control" disabled>
	</div>
	<div class="form-group mb-2">
		<label>Penulis</label>
		<input value = "<?=$data['penulis']?>" type="text" name="penulis"  class="form-control" disabled>
	</div>
	<div class="form-group mb-2">
		<label>Penerbit</label>
		<input value = "<?=$data['penerbit']?>" type="text" name="penerbit"  class="form-control" disabled>
	</div>
	<div class="form-group mb-2">
		<label>Tanggal Pinjam</label>
		<input type="date" name="tanggal_pinjam"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Tanggal Dikembalikan</label>
		<input type="date" name="tanggal_kembali"  class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-success">SIMPAN</button>

		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>