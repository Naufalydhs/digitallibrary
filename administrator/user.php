<h5>Halaman Data User</h5>
<a href="?url=tambah_user" class="btn btn-outline-dark">Tambah User
</a>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold">
		<td>No</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Alamat</td>
		<td>Level</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$sql = "SELECT*From user ORDER BY id_user DESC";
		$query = mysqli_query($koneksi,$sql);
		foreach ($query as $data) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?=  $data['nama_lengkap']?></td>
				<td><?=   $data['email']?></td>
				<td><?=   $data['alamat']?></td>
				<td><?=   $data['level']?></td>
				<td>
					<a href="?url=edit_user&id_user=<?= $data ['id_user']?>" class = 'btn btn-outline-warning'>EDIT</a>
				</td>
				<td>
					<a onclick =" return confirm ('Apakah Anda yakin ingin menghapus Data ?')" href="?url=hapus_user&id_user=<?= $data ['id_user']?>" class = 'btn btn-outline-danger'>HAPUS</a>
				</td>
			</tr>	
		<?php } ?>
	</tbody>
</table>