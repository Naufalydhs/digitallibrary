<h5>Halaman Data Kategori</h5>
<a href="?url=tambah_kategori" class="btn btn-outline-dark">Tambah Kategori
</a>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold">
		<td>No</td>
		<td>Nama Kategori</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$sql = "SELECT*From kategoribuku ORDER BY id_kategori DESC";
		$query = mysqli_query($koneksi,$sql);
		foreach ($query as $data) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?=  $data['nama_kategori']?></td>
				<td>
					<a href="?url=edit_kategori&id_kategori=<?= $data ['id_kategori']?>" class = 'btn btn-outline-warning'>EDIT</a>
				</td>
				<td>
					<a onclick =" return confirm ('Apakah Anda yakin ingin menghapus Data ?')" href="?url=hapus_kategori&id_kategori=<?= $data ['id_kategori']?>" class = 'btn btn-outline-danger'>HAPUS</a>
				</td>
			</tr>	
		<?php } ?>
	</tbody>
</table>