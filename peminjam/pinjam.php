<h5>Halaman Peminjaman Buku</h5>
<a href="?url=pinjam_buku" class="btn btn-outline-dark">Pinjam Buku
</a>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold">
		<td>No</td>
		<td>Nama Peminjam</td>
		<td>Judul Buku</td>
		<td>Penulis</td>
		<td>Penerbit</td>
		<td>Tanggal Pinjam</td>
		<td>Tanggal Pengembalian</td>
		<td>Status</td>
		<td>Aksi</td>
	</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$user = $_SESSION['id_user'];
		$no = 1;
		$sql = "SELECT*From peminjaman,user, buku WHERE peminjaman.id_user=user.id_user AND peminjaman.id_buku=buku.id_buku AND peminjaman.id_user = $user ORDER BY id_peminjaman DESC";
		$query = mysqli_query($koneksi,$sql);
		foreach ($query as $data) { ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nama_lengkap']?></td>
				<td><?= $data['judul']?></td>
				<td><?= $data['penulis']?></td>
				<td><?= $data['penerbit']?></td>
				<td><?= $data['tanggalpeminjaman']?></td>
				<td><?= $data['tanggalpengembalian']?></td>
				<td><?php 
					$statuspinjam = $data['statuspeminjaman']; 
					if ($statuspinjam =="kembali"){
						echo"<span class='badge text-bg-success'>Dikembalikan</span>";
					}else { ?>
						<span class='text-danger'>Dipinjam</span>
					<?php } ?>
					
				</td>
				<td><a class = 'btn btn-primary' href="?url=ulasan&id_buku=<?= $data['id_buku'];?>">Ulasan</a></td>
			</tr>	
		<?php } ?>
	</tbody>
</table>