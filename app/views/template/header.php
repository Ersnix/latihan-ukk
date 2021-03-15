<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan - <?php echo $_SESSION['level']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PENGADUAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php  if ($_SESSION['level'] == "masyarakat") {
  ?>
  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>/masyarakat/">Home</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="<?= BASEURL ?>/masyarakat/tambahPengaduan">Tambah Pengaduan</a>
      </li>
    </ul>
    <span class="form-inline my-2 my-md-0">
      <a style="color: white;margin-right: 20px;"> hi,<?php  echo $_SESSION['username']; ?></a>
      <a class="btn btn-danger" href="<?= BASEURL ?>/login/logout">Logout</a>
    </span>
  </div>
<?php   } ?>
<?php   if ($_SESSION['level'] == 'admin') {
 ?>
  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" >
        <a class="nav-link" href="<?= BASEURL ?>/admin/index">Laporan Pengaduan</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="<?= BASEURL ?>/admin/petugas">Petugas</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="<?= BASEURL ?>/admin/generateLaporan">Generate Laporan</a>
      </li>
    </ul>
    <span class="form-inline my-2 my-md-0">
      <a style="color: white;margin-right: 20px;"> hi, Admin</a>
      <a class="btn btn-danger" href="<?= BASEURL ?>/login/logout">Logout</a>
    </span>
  </div>
<?php   } ?>
<?php   if ($_SESSION['level'] == 'petugas') {
 ?>
  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item" >
        <a class="nav-link" href="<?= BASEURL ?>/petugas/index">Daftar Pengaduan</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="<?= BASEURL ?>/petugas/generateLaporan">Generate Laporan</a>
      </li>
    </ul>
    <span class="form-inline my-2 my-md-0">
      <a style="color: white;margin-right: 20px;"> hi, Petugas- <?php  echo $_SESSION['username']; ?></a>
      <a class="btn btn-danger" href="<?= BASEURL ?>/login/logout">Logout</a>
    </span>
  </div>
<?php   } ?>
</nav>

