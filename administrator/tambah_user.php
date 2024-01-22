<h5>Halaman Tambah Data User</h5>
<a href="?url=user" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=simpan_tambah_user">
	<div class="form-group mb-2">
		<label>Username</label>
		<input type="text" name="user"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Password</label>
		<input type="password" name="pass"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Nama Lengkap</label>
		<input type="text" name="nama"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Email</label>
		<input type="email" name="email"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Alamat</label>
		<input type="text" name="alamat"  class="form-control" required>
	</div>

	<div class="form-group mb-2">
		<label>Level User</label>
		<select name="level" class="form-control" required>
			<option value="">Pilih Level Petugas</option>
			<option value="admin">Admin</option>
			<option value="petugas">Petugas</option>
			<option value="petugas">Peminjam</option>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-success">SIMPAN</button>

		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>