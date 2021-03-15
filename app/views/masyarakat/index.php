<?php 
	if ($_SESSION['login'] != 'login') {
		header('Location:'.BASEURL);
	}
 ?>
 <div class="container">
	<center><h2>Daftar Pengaduan Anda</h2></center>
	<a class="btn btn-primary" href="<?= BASEURL ?>/masyarakat/tambahPengaduan">Tulis Pengaduan</a></center>
	<table border="1" class="table">
		<thead class="thead-dark">
			<th>no</th>
			<th>Tanggal</th>
			<th>Isi Pengaduan</th>
			<th>status</th>
			<th>Bukti Foto</th>
			<th>Action</th>
		</thead>
		<?php $no = 1; foreach($data as $d): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $d['tgl_pengaduan'] ?></td>
			<td><?php echo $d['isi_laporan']; ?></td>
			<td class="st<?php echo $d['status'] ?>">
				<?php 
					if ($d['status'] == "0") {
						echo "Belum Ditanggapi";
					}else{
						echo $d['status'];
					}

				 ?>					
			</td>
			<td><img height="200" width="200" src="<?=BASEURL ?>/<?php echo "gambar/".$d['foto'] ?>"></td>
			<td>
				<a class="btn btn-primary" href="<?= BASEURL ?>/masyarakat/detailPengaduan/<?php echo $d['id_pengaduan'] ?> ">Detail</a>
			</td>
		</tr>

		<?php $no++; endforeach; ?>
	</table>
	<?php 
			if (count($data) == 0) {
		?>
				<center><i><h3>Anda Belum Melaporkan Sesuatu</h3></i>
		 		<a class="btn btn-primary" href="<?= BASEURL ?>/masyarakat/tambahPengaduan">Tulis Pengaduan</a></center>
		 <?php 
			}
		 ?>
	
</div>