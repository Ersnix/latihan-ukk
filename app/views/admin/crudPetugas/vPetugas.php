<?php 
	if (isset($_SESSION['addPetugas'])) {
		if ($_SESSION['addPetugas'] == 'berhasil') {
			echo "<script> alert('Petugas Berhasil Ditambahkan') </script>";
			unset($_SESSION['addPetugas']);
		}
	}
	if (isset($_SESSION['delPetugas'])) {
		if ($_SESSION['delPetugas'] == 'berhasil') {
			echo "<script> alert('Petugas Berhasil Dihapus') </script>";
			unset($_SESSION['delPetugas']);
		}
	}
	if (isset($_SESSION['editPetugas'])) {
		if ($_SESSION['editPetugas'] == 'berhasil') {
			echo "<script> alert('Petugas Berhasil Diubah') </script>";
			unset($_SESSION['editPetugas']);
		}
	}
 ?>
<div class="container">
<center><h1>Petugas</h1></center>
<a class="btn btn-success" href="<?= BASEURL ?>/admin/tambahPetugas">Tambah Petugas</a>
<table border="1" class="table">
	<tr class="thead-dark">
		<th>id</th>
		<th>Nama Petugas</th>
		<th>Username</th>
		<th>Password</th>
		<th>telp</th>
		<th>action</th>
	</tr>
	<?php foreach($data as $p): ?>
	<tr>
		<td><?php echo  $p['id_petugas'] ?></td>
		<td><?php echo  $p['nama_petugas'] ?></td>
		<td><?php echo $p['username'] ?></td>
		<td><?php echo $p['password'] ?></td>
		<td><?php echo $p['telp'] ?></td>
		<td><a class="btn btn-warning" href="<?= BASEURL ?>/admin/editPetugas/<?php echo  $p['id_petugas'] ?>">edit</a>|<a class="btn btn-danger" href="<?= BASEURL ?>/admin/deletePetugas/<?php echo  $p['id_petugas'] ?>">hapus</a></td>
	</tr>
<?php endforeach; ?>
</table>
</div>