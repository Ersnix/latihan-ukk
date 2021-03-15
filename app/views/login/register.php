<?php 
	if (isset($_SESSION['register'])) {
		if ($_SESSION['register'] == 'gagal') {
			echo "<script> alert('Gagal Register, Nik atau Usernmae yang anda masukan telah terdaftar!!!') </script>";
			unset($_SESSION['register']);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/style.css">
</head>
<body>
	<div class="container-fluid">
		<form class="box box-register" action="<?= BASEURL ?>/register/prosesRegister" method="POST">
			<center><h2>Register</h2></center>
			<div class="form-group">
				<label>Nik</label>
				<input class="form-control" type="Number" name="nik" required="" autocomplete="off" placeholder="masukan Nik">	
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input class="form-control" type="text" required="" name="nama" placeholder="masukan nama">		
			</div>
			<div class="form-group">
				<label>Telepon</label>
				<input class="form-control" required="" type="Number" name="telp" placeholder="masukan no telepon">		
			</div>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" required="" type="text" name="username" placeholder="masukan username">		
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" required="" type="Password" name="password" placeholder="masukan password">		
			</div>
			<input class="btn btn-primary w-100" type="submit" name="submit">
			<center><p>sudah memiliki akun?<a href="<?= BASEURL ?>">login</a></p></center>
		</form>
		
	</div>
</body>
</html>