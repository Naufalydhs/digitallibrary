<?php 
include '../koneksi.php';
$id_relasi = $_GET['id_kategoribuku'];
$sql = "SELECT*FROM kategoribuku_relasi where id_kategoribuku = '$id_relasi'";
$query = mysqli_query ($koneksi, $sql);
$data = mysqli_fetch_array ($query);
?>


<h5>Halaman Edit Data buku</h5>
<a href="?url=data_relasi" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=simpan_edit_relasi&id_kategoribuku=<?=$data['id_kategoribuku'];?>">
	<div class="form-group mb-2">
		<label>Judul</label>
		<input value = "<?=$data['judul']?>" type="text" name="judul"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Penulis</label>
		<input value = "<?=$data['penulis']?>" type="text" name="penulis"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Penerbit</label>
		<input value = "<?=$data['penerbit']?>" type="text" name="penerbit"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Tahun</label>
		<input value = "<?=$data['tahun']?>" type="number" name="tahun"  class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-success">SIMPAN</button>

		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>