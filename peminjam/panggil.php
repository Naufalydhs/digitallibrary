<div class="container text-center">
	<div class="row justify-content-around">
	
		<?php
			
			include "../koneksi.php";
			$pilih=$_GET['pilih'];
			if ($pilih>=1) {
			$buku = mysqli_query ($koneksi, "SELECT*FROM kategoribuku_relasi,buku WHERE kategoribuku_relasi.id_buku=buku.id_buku AND id_kategori='$pilih' ORDER BY judul ASC");
		}else{
			$buku = mysqli_query ($koneksi, "SELECT*FROM buku ORDER BY judul ASC");
		}
			foreach ($buku as $data_buku) {
			?>
		<div class="card col-3 m-1">
			<form method="post" action="?url=simpan_tambah_koleksi&id_buku=<?=$data_buku['id_buku'];?>">
				<img  src="../asset/<?php echo $data_buku["gambar"]; ?>" width = 200 title="<?php echo $data_buku['gambar']; ?>">
				  <div class="card-body">
				    <h5 class="card-title"><?=$data_buku['judul'];?></h5>
				    <p class="card-text">Penulis : <?=$data_buku['penulis'];?></p>
				    <p class="card-text">Penerbit : <?=$data_buku['penerbit'];?></p>
				    <p class="card-text">Tahun Terbit : <?=$data_buku['tahun'];?></p>
				    <button type="submit" class="btn btn-outline-success">Tambah Koleksi</button>
				    
				  </div>
			</form>
		</div>
		<?php } ?>

	</div>
	
</div>	