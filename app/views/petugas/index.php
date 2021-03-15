<?php 
	if ($_SESSION['login'] != 'login') {
		header('Location:'.BASEURL);
	}
 ?>
<div class="container">
	<center><h1>DAFTAR PENGADUAN</h1></center>
	<center>
		<a class="btn btn-outline-danger" href="<?= BASEURL ?>/petugas/pengaduan0">Belum Tervertivikasi <i class="badge badge-danger"><?php echo count($data[1]) ?></i></a>
		<a class="btn btn-outline-warning" href="<?= BASEURL ?>/petugas/pengaduanProses">Sedang Diproses<i class="badge badge-warning"><?php echo count($data[2]) ?></i></a>
		<a class="btn btn-outline-success" href="<?= BASEURL ?>/petugas/pengaduanSelesai">Pengaduan Selesai<i class="badge badge-success"><?php echo count($data[3]) ?></i></a>
	</center>
	<table border="1" class="table">
		<thead class="thead-dark">
			<th>NIK</th>
			<th>Tanggal</th>
			<th>Isi Laporan</th>
			<th>Status</th>
			<th>Bukti Foto</th>
			<th>Action</th>
		</thead>
		<?php foreach($data[0] as $d): ?>
		<tbody>
			<td><?php echo $d['nik']; ?></td>
			<td><?php echo $d['tgl_pengaduan']; ?></td>
			<td><?php echo $d['isi_laporan']; ?></td>
			<td class="st<?php echo $d['status'] ?>">
				<?php 
					if ($d['status'] == "0") {
						echo "Belum Difertivikasi";
					}else{
						echo $d['status'];
					}
				 ?>
			</td>
			<td><img height="100" width="100" src="<?= BASEURL ?>/gambar/<?php echo $d['foto'] ?>">	</td>
			<td><a class="btn btn-success" href="<?= BASEURL ?>/admin/laporanDetail/<?php echo $d['id_pengaduan']; ?>">Detail</a></td>
		</tbody>
	<?php 	endforeach; ?>
	</table>
</div>