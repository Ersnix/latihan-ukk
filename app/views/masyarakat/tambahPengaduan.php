<div class="container">
	<form action="<?= BASEURL ?>/masyarakat/prosestambahPengaduan" method="POST" enctype="multipart/form-data">
		<center><h2>Form Pengaduan</h2></center>
		<div class="form-group">
			<label>Tanggal Pengaduan</label>	
			<input class="form-control" type="text" name="tanggal" value="<?php echo date('Y-m-d') ?>" readonly="" >
		</div>
		<div class="form-group">
			<label>Nik Anda</label>	
			<input class="form-control" type="text" name="tanggal" value="<?php echo $_SESSION['nik'] ?>" readonly="" >
		</div>
		<div class="form-group">
			<label for="isi">Pengaduan</label>
			<textarea class="form-control" name="isi"></textarea>	
		</div>
		<div class="form-group">
			<label>Bukti Laporan</label>	
			<br>
			<input required="" type="file" name="foto" accept=".jpg,.png,.jpeg">
		</div>
		
		<br>

		<center><input class="btn btn-primary sbmt-ms" type="submit" name="submit"></center>
	</form>
</div>