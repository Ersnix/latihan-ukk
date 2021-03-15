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
	<center><h1>DATA PENGADUAN DAN TANGGAPAN</h1></center>
	<table border="1" class="table">
		<thead class="thead-dark">
			<th>NIK Pengadu</th>
			<th>Tgl Pengaduan</th>
			<th>Pengaduan</th>
			<th>Bukti Foto</th>			
			<th>Tgl Tanggapan</th>
			<th>Tanggapan</th>
		</thead>
		<?php foreach($data as $d): ?>
		<tbody>
			<td><?php echo $d['nik']; ?></td>
			<td><?php echo $d['tgl_pengaduan']; ?></td>
			<td><?php echo $d['isi_laporan']; ?></td>
			<td><img height="100" width="100" src="<?= BASEURL ?>/gambar/<?php echo $d['foto'] ?>">	</td>
			<td><?php echo $d['tgl_tanggapan']; ?></td>
			<td><?php echo $d['tanggapan']; ?></td>
		</tbody>
	<?php 	endforeach; ?>
	</table>
</div>
</div>	
</body>
<script type="text/javascript">
	window.print();
	setTimeout(window.close,100);
</script>