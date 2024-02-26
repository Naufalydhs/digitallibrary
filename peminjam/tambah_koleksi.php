<h5>Halaman Tambah Koleksi Buku</h5>
<form action="?url=tambah_koleksi" method="GET">
<div class="row justify-content-between">
	<div class="col">
		<a href="?url=koleksi_buku" class="btn btn-outline-secondary">Kembali</a>
	</div>
	<div class="col-2 form-group mb-2">
		
		<select name="pilih" id="pilih" class= "form-control" onchange="buku()" >
				<option value="">Kategori</option>
				<?php 
				include "../koneksi.php";
				$kategori = mysqli_query ($koneksi, "SELECT*FROM kategoribuku ORDER BY nama_kategori ASC");
				foreach ($kategori as $data_kategori) {
				?>
				<option value="<?=$data_kategori['id_kategori']?>"><?=$data_kategori['nama_kategori'];?></option>
				<?php 
				
				} ?>

			</select>
	</div>
</div>
</form>
 <div id='buku'></div> 
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
	function buku() {
	var pilih = $('#pilih').val();
	$('#buku').load("panggil.php?pilih="+pilih+"");
			}
</script>