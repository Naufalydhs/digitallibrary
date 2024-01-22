<h5>Halaman Tambah Data Relasi</h5>
<a href="?url=data_relasi" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=simpan_tambah_relasi">
	<div class="form-group mb-2">
		<label>Judul Buku</label>
		<select name="judul"	class="form-control" required>
			<option value="">Pilih Judul Buku</option>
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
			<option value="">Pilih Kategori</option>
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