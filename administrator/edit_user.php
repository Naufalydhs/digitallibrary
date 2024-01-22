<?php 
include '../koneksi.php';
$id_user = $_GET['id_user'];
$sql = "SELECT*FROM user where id_user = '$id_user'";
$query = mysqli_query ($koneksi, $sql);
$data = mysqli_fetch_array ($query);
?>


<h5>Halaman Edit Data User</h5>
<a href="?url=user" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=simpan_edit_user&id_user=<?=$data['id_user'];?>">
	<div class="form-group mb-2">
		<label>Username</label>
		<input value = "<?=$data['username']?>" type="text" name="user"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Password</label>
		<input value = "<?=$data['password']?>" type="password" name="pass"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Nama Lengkap</label>
		<input value = "<?=$data['nama_lengkap']?>" type="text" name="nama"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Email</label>
		<input value = "<?=$data['email']?>" type="email" name="email"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Alamat</label>
		<input value = "<?=$data['alamat']?>" type="text" name="alamat"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Level User</label>
		<select name="level" class="form-control" required>
			<option value="<?=$data['level']?>"><?=$data['level']?></option>
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