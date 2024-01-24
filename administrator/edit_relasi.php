<?php 
include '../koneksi.php';
$id_relasi = $_GET['id_kategoribuku'];
$sql = "SELECT*FROM kategoribuku_relasi, kategoribuku, buku where kategoribuku_relasi.id_buku=buku.id_buku AND  kategoribuku_relasi.id_kategori=kategoribuku.id_kategori AND id_kategoribuku = '$id_relasi'";
$query = mysqli_query ($koneksi, $sql);
$data = mysqli_fetch_array ($query);
?>


<h5>Halaman Edit Relasi</h5>
<a href="?url=data_relasi" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=simpan_edit_relasi&id_kategoribuku=<?=$data['id_kategoribuku'];?>">
	<div class="form-group mb-2">
		<label>Judul Buku</label>
		<select name="judul"	class="form-control" required>
			<option value="<?=$data['id_buku']?>"><?=$data['judul']?></option>
			<?php 
			include "../koneksi.php";
			$judul = mysqli_query ($koneksi, "SELECT*FROM buku ORDER BY judul ASC");
			foreach ($judul as $data_judul) {
			?>
			<option value="<?=$data_judul['id_buku']?>"><?=$data_judul['judul'];?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group mb-2">
		<label>Nama Kategori</label>
		<select name="kategori"	class="form-control" required>
			<option value="<?=$data['id_kategori']?>"><?=$data['nama_kategori']?></option>
			<?php 
			include "../koneksi.php";
			$kategori = mysqli_query ($koneksi, "SELECT*FROM kategoribuku ORDER BY nama_kategori ASC");
			foreach ($kategori as $data_kategori) {
			?>
			<option value="<?=$data_kategori['id_kategori']?>"><?=$data_kategori['nama_kategori'];?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-success">SIMPAN</button>

		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>