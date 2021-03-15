<?php 
	if (isset($_SESSION['addPetugas'])) {
		if ($_SESSION['addPetugas'] == 'gagal') {
			echo "<script> alert('GAGAL Menambahkan Petugas, username yang anda masukan telah terdaftar') </script>";
			unset($_SESSION['addPetugas']);
		}
	}
 ?>
<div class="container-fluid">
	
	<form class="box box-addptgs" method="POST" action="<?= BASEURL ?>/admin/prosesAddPetugas" >
		<center><h2>Tambah Petugas</h2></center>
		<div class="form-group">
			<label>Nama Petugas</label>
			<input class="form-control" type="text" name="nama">	
		</div>
		<div class="form-group">
			<label>Telepon</label>
			<input class="form-control" type="number" name="telp">		
		</div>
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" type="text" name="username">		
		</div>	
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="Password" name="password">		
		</div>
		<input class="btn btn-primary w-100" type="submit" name="submit">
	</form>
</div>