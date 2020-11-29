





<?php 

	require '../controllers/showA.php';

	$data = view("SELECT * FROM pegawaia");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>User1</title>

	<style type="text/css">
		
		a {

			text-decoration: none;

		}

	</style>

</head>
<body>


	<table border="1" cellpadding="10" cellspacing="0">
		
		<th>NO</th>
		<th>Foto</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Aksi</th>

		<?php $i=1; ?>
		<?php foreach ($data as $value) : ?>

			<tr>
				<td><?= $i ?></td>
				<td><img src="../models/img/<?= $value["foto"];?>" width="40px" height="40px"></td>
				<td><?= $value["nama"]; ?></td>
				<td><?= $value["jeniskelamin"]; ?></td>
				<td><?= $value["alamat"]; ?></td>
				<td><?= $value["email"]; ?></td>
				<td><a href="../controllers/viewupdateA.php?id=<?= $value["id"];?>" target="_blank">Edit</a> | <a href="../controllers/deleteA.php?id=<?= $value["id"];?>" onclick=" return confirm('yakin');">Hapus</a></td>
			</tr>

		<?php $i++; ?>
		<?php endforeach; ?>

	</table>

	<br>
	<a href="../controllers/createA.php">Tambah data</a>

</body>
</html>