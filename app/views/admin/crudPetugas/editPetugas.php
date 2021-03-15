<div class="container-fluid">
	<center><h1>Edit Petugas</h1></center>
	<form class="box box-register" action="<?= BASEURL ?>/admin/prosesEditPetugas" method="POST">
		<div class="form-group">
			<label>Nama Petugas</label>
			<input  type="hidden" name="id" value="<?php echo $data['id_petugas'] ?>">
			<input class="form-control" type="text" name="nama" value="<?php echo $data['nama_petugas'] ?>">	
		</div>
		<div class="form-group">
			<label>Telepon</label>
			<input class="form-control" type="number" name="telp" value="<?php echo $data['telp'] ?>">	
		</div>
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" type="text" name="username" value="<?php echo $data['username'] ?>">	
		</div>
		<div class="form-group">
			<label>New Password</label>
			<input class="form-control" type="text" name="password" > <span style="color: red">*Keep it Blank if you doesn't want to change the old password</span>
		</div>
			<br>
		<input class="btn btn-primary w-100" type="submit" name="submit">
	</form>
</div>