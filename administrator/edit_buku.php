<?php 
include '../koneksi.php';
$id_buku = $_GET['id_buku'];
$sql = "SELECT*FROM buku where id_buku = '$id_buku'";
$query = mysqli_query ($koneksi, $sql);
$data = mysqli_fetch_array ($query);
?>


<h5>Halaman Edit Data buku</h5>
<a href="?url=data_buku" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" enctype="multipart/form-data" action="?url=simpan_edit_buku&id_buku=<?=$data['id_buku'];?>">
	<div class="form-group mb-2">
		<label>Gambar Buku</label>
		<div class="mb-2"><img src="../asset/<?php echo $data["gambar"]; ?>" width = 200 title="<?php echo $data['gambar']; ?>"></div>
		<input value= "<?= $data['gambar'] ?>" type="file" name="gambar" class="form-control">
	</div>
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