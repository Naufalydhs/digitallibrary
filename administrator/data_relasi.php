<h5>Halaman Data Relasi Buku</h5>
<a href="?url=tambah_relasi" class="btn btn-outline-dark">Tambah Relasi
</a>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold">
		<td>No</td>
		<td>Judul Buku</td>
		<td>Kategori Buku</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$sql = "SELECT*From kategoribuku_relasi, kategoribuku, buku WHERE kategoribuku_relasi.id_kategori=kategoribuku.id_kategori AND kategoribuku_relasi.id_buku=buku.id_buku ORDER BY id_kategoribuku DESC";
		$query = mysqli_query($koneksi,$sql);
		foreach ($query as $data) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?=  $data['judul']?></td>
				<td><?=  $data['nama_kategori']?></td>
				<td>
					<a href="?url=edit_relasi&id_kategoribuku=<?= $data ['id_kategoribuku']?>" class = 'btn btn-outline-warning'>EDIT</a>
				</td>
				<td>
					<a onclick =" return confirm ('Apakah Anda yakin ingin menghapus Data ?')" href="?url=hapus_relasi&id_kategoribuku=<?= $data ['id_kategoribuku']?>" class = 'btn btn-outline-danger'>HAPUS</a>
				</td>
			</tr>	
		<?php } ?>
	</tbody>
</table>