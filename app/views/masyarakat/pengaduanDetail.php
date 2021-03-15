<?php  

	if ($data['status'] == "0") {
		$status = "Belum Divertifikasi";
		$bg = "danger";
	}elseif($data['status'] == "proses"){
		$status =  $data['status'];
		$bg = "warning";
	}elseif($data['status'] == "selesai"){
		$dataTanggapan = $this->model('Petugas_Model')->dataTanggapan($data['id_pengaduan']);
		$status =  $data['status'];
		$bg = "success";
	} 

?>
<div class="container">	
	<form action="<?= BASEURL ?>/admin/kerjakanLaporan<?php echo $data['status'] ?>/<?php echo $data['id_pengaduan'] ?>" method="POST" enctype="multipart/form-data">
		<center><h2>Detail Pengaduan</h2></center>
		<div class="form-group">
			<label for="isi">Status</label>
			<input class="form-control bg-<?php echo $bg ?>" type="text" name="nik" readonly="" value="<?php echo $status ?>">
		</div>
		<div class="form-group">
			<label for="isi">Nik Pengadu</label>
			<input class="form-control" type="number" name="nik" readonly="" value="<?php echo $data['nik'] ?>">
		</div>
		<div class="form-group">
			<label for="isi">Tanggal Pengaduan</label>
			<input class="form-control" type="text" name="nik" readonly="" value="<?php echo $data['tgl_pengaduan'] ?>">
		</div>
		<div class="form-group">
			<label for="isi">Isi Laporan</label>
			<textarea class="form-control" name="isi" readonly="" value="" ><?php echo $data['isi_laporan'] ?></textarea>	
		</div>
		<div class="form-group">
			<label>Bukti Laporan</label>	
			<br>	
			<img src="<?= BASEURL ?>/gambar/<?php echo $data['foto'] ?>">	
		</div>
	<?php if ($status == "selesai") {
		
		 ?>
		 <hr>
		 <center><h2>Tanggapan</h2></center>	
		<div class="form-group">
			<label for="isi">Tanggal Ditanggapi</label>
			<input class="form-control" type="text" name="nik" readonly="" value="<?php echo $dataTanggapan['tgl_tanggapan'] ?>">
		</div>
		 <div class="form-group">
			<label for="isi">Tanggapan</label>
			<textarea class="form-control" type="text" name="tanggapan" readonly=""><?php echo $dataTanggapan['tanggapan']; ?></textarea>
		</div>
	<?php 	} ?>
		
		<br>
		<a class="btn btn-outline-secondary" href="<?= BASEURL ?>/masyarakat/index" >Kembali</a>
	</form>
</div>