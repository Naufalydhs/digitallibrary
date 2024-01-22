<?php 
include '../koneksi.php';
$id_kategori = $_GET['id_kategori'];
$sql = "SELECT*FROM kategoribuku where id_kategori = '$id_kategori'";
$query = mysqli_query ($koneksi, $sql);
$data = mysqli_fetch_array ($query);
?>


<h5>Halaman Edit Data Kategori</h5>
<a href="?url=data_kategori" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=simpan_edit_kategori&id_kategori=<?=$data['id_kategori'];?>">
	<div class="form-group mb-2">
		<label>Nama Kategori</label>
		<input value = "<?=$data['nama_kategori']?>" type="text" name="kategori"  class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-success">SIMPAN</button>

		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>