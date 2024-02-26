<h5>Halaman Koleksi Buku</h5>
<a href="?url=tambah_koleksi" class="btn btn-outline-dark">Tambah Koleksi Buku
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
		<td>Aksi</td>
	</tr>
	</thead>
	<tbody>
		<?php 
		$user=$_SESSION['id_user'];
		include '../koneksi.php';
		$no = 1;
		$sql = "SELECT*From koleksipribadi, user, buku WHERE koleksipribadi.id_user=user.id_user AND koleksipribadi.id_buku=buku.id_buku AND koleksipribadi.id_user = $user ORDER BY id_koleksi DESC";
		$query = mysqli_query($koneksi,$sql);
		foreach ($query as $data) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><img src="../asset/<?php echo $data["gambar"]; ?>" width = 100 title="<?php echo $data['gambar']; ?>"></td></td>
				<td><?=  $data['judul']?></td>
				<td><?=   $data['penulis']?></td>
				<td><?=   $data['penerbit']?></td>
				<td>
					<a  href="?url=tanggal_pinjam&id_buku=<?= $data ['id_buku']?>" class = 'btn btn-outline-success'>PINJAM</a>
					<a onclick =" return confirm ('Apakah Anda yakin ingin menghapus Data ?')" href="?url=hapus_koleksi&id_koleksi=<?= $data ['id_koleksi']?>" class = 'btn btn-outline-danger'>HAPUS</a>
				</td>
			</tr>	
		<?php } ?>
	</tbody>
</table>