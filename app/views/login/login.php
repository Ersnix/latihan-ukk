<?php 
	if (isset($_SESSION['register'])) {
		if ($_SESSION['register'] == 'berhasil') {
			echo "<script> alert('Register Berhasil, Silahkan Login') </script>";
			unset($_SESSION['register']);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/style.css">
</head>
<body>
	<div class="container-fluid">
		<form class="box" action="<?= BASEURL ?>/login/prosesLogin" method="post">			
			<center><h2>Login</h2></center>
			<div class="form-group">
				<label>Username</label>			
				<input class="form-control" type="text" name="username" placeholder="masukan username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="password" placeholder="masukan password">	
			</div>
			
			<br>
			<input class="btn btn-primary w-100" type="submit" name="submit">
			<center><p>Belum punya akun?<a href="<?= BASEURL ?>/register/index">Register</a></p></center>
		</form>
		
	</div>
</body>
</html>