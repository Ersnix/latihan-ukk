<?php 
	if ($_SESSION['login'] != 'login') {
		header('Location:'.BASEURL);
	}
 ?>

<div class="container">
	<center><h1>GENERATE LAPORAN</h1></center>
	<form class="cetak" method="post" target="_BLANK" action="<?= BASEURL ?>/admin/cetakData">
		<h4>Filter Cetak Data</h4>
		<div class="flex">
		<div class="form-group">
			<label>Dari</label>
			<input class="form-control" type="date" name="tglawal">
		</div>
		<div class="form-group">
			<label>Sampai</label>
			<input class="form-control" type="date" name="tglakhir">
		</div>
		</div>
		<input class="btn btn-primary" type="submit" name="filter" value="Cetak">
	</form>
	<table border="1" class="table">
		<thead class="thead-dark">
			<th>NIK Pengadu</th>
			<th>Tgl Pengaduan</th>
			<th width="30%">Pengaduan</th>
			<th>Tgl Tanggapan</th>
			<th>Petugas</th>
			<th width="30%">Tanggapan</th>
		</thead>
		<?php foreach($data as $d): ?>
		<tbody>
			<td><?php echo $d['nik']; ?></td>
			<td><?php echo $d['tgl_pengaduan']; ?></td>
			<td><?php echo $d['isi_laporan']; ?></td>
			<td><?php echo $d['tgl_tanggapan']; ?></td>
			<td><?php echo $d['nama_petugas']; ?></td>
			<td ><?php echo $d['tanggapan']; ?></td>
		</tbody>
	<?php 	endforeach; ?>
	</table>
</div>
