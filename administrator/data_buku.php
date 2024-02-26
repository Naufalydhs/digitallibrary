<h5>Halaman Data Buku</h5>
<a href="?url=tambah_buku" class="btn btn-outline-dark">Tambah Buku
</a>

<hr>
<table class="table table-striped table-bordered table align-middle">
	<thead>
	<tr class="fw-bold">
		<td>No</td>
		<td>Gambar</td>
		<td>Judul Buku</td>
		<td>Penulis</td>
		<td>Penerbit</td>
		<td>Tahun</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$sql = "SELECT*From buku ORDER BY id_buku DESC";
		$query = mysqli_query($koneksi,$sql);
		foreach ($query as $data) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><img src="../asset/<?php echo $data["gambar"]; ?>" width = 100 title="<?php echo $data['gambar']; ?>"></td></td>
				<td><?=  $data['judul']?></td>
				<td><?=   $data['penulis']?></td>
				<td><?=   $data['penerbit']?></td>
				<td><?=   $data['tahun']?></td>
				<td>
					<a href="?url=edit_buku&id_buku=<?= $data ['id_buku']?>" class = 'btn btn-outline-warning'>EDIT</a>
				</td>
				<td>
					<a onclick =" return confirm ('Apakah Anda yakin ingin menghapus Data ?')" href="?url=hapus_buku&id_buku=<?= $data ['id_buku']?>" class = 'btn btn-outline-danger'>HAPUS</a>
				</td>
			</tr>	
		<?php } ?>
	</tbody>
</table>