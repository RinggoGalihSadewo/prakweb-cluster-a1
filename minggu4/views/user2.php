





<?php 

	require '../controllers/showB.php';

	$data = view("SELECT * FROM pegawaib");

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

	<h1>User 2</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<th>NO</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Aksi</th>

		<?php $i=1; ?>
		<?php foreach ($data as $value) : ?>

			<tr>
				<td><?= $i ?></td>
				<td><?= $value["nama"]; ?></td>
				<td><?= $value["jeniskelamin"]; ?></td>
				<td><?= $value["alamat"]; ?></td>
				<td><?= $value["email"]; ?></td>
				<td><a href="../controllers/viewupdateB.php?id=<?= $value["id"];?>">Edit</a> | <a href="../controllers/deleteB.php?id=<?= $value["id"];?>" onclick=" return confirm('yakin');">Hapus</a></td>
			</tr>

		<?php $i++; ?>
		<?php endforeach; ?>

	</table>
	
	<br>
	<a href="../controllers/createB.php">Tambah data</a>
	<br>

</body>
</html>