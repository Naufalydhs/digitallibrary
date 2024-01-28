<h5>Halaman Tambah Data Buku</h5>
<a href="?url=data_buku" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" enctype="multipart/form-data" action="?url=simpan_tambah_buku">
	<div class="form-group mb-2">
		<label>Gambar Buku</label>
		<input type="file" name="gambar" class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Judul</label>
		<input type="text" name="judul"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Penulis</label>
		<input type="text" name="penulis"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Penerbit</label>
		<input type="text" name="penerbit"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Tahun</label>
		<input type="number" name="tahun"  class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" name="upload"	class="btn btn-outline-success">SIMPAN</button>

		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>