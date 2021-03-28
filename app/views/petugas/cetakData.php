<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan - <?php echo $_SESSION['level']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/style.css">
</head>
<body>
<div class="container">
	<center>
		<h1>PEMERINTAH KABUPATEN BADUNG</h1>
		<h2>DESA ADAT MENGWI</h2>
	</center>
	<hr>
	<center><h3>Data Pengaduan dan tanggapan</h3></center>
	<br>
	<p><b>Periode :</b> <?php echo $_SESSION['filter']; ?></p>
	<table border="1" class="table small">
		<thead class="text-secondary">
			<th>No</th>
			<th>NIK Pengadu</th>
			<th>Tgl Pengaduan</th>
			<th width="30%">Pengaduan</th>
			<th>Tgl Tanggapan</th>
			<th>Petugas</th>
			<th width="30%">Tanggapan</th>
		</thead>
		<?php $no=1; foreach($data as $d): ?>
		<tbody>
			<td><?php echo $no; ?></td>
			<td><?php echo $d['nik']; ?></td>
			<td><?php echo $d['tgl_pengaduan']; ?></td>
			<td><?php echo $d['isi_laporan']; ?></td>
			<td><?php echo $d['tgl_tanggapan']; ?></td>
			<td><?php echo $d['nama_petugas']; ?></td>
			<td><?php echo $d['tanggapan']; ?></td>
		</tbody>
	<?php $no++;	endforeach; ?>
	</table>
</div>
</div>	
</body>
<script type="text/javascript">
	window.print();
	setTimeout(window.close,100);
</script>