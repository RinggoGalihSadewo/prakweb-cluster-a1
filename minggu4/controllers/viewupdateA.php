






<?php 

	require 'updateA.php';
	require 'showA.php';

	$id = $_GET["id"];

	$data = view("SELECT * FROM pegawaia WHERE id = $id")[0];

	
	if (isset($_POST["ubah"])) {
		
		//mengecek isi data form jika sudah di isi semua menghasilkan +1 maka berhasil jika -1 maka gagal
		if (update($_POST) > 0) {
		
			echo "
				<script> 
					alert ('data berhasil diubah!');
					document.location.href='../views/user1.php';
				</script>
				";

		}

		else {

			echo "<script> alert ('data gagal diubah!');
				</script>";

		}

	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

	<h2>Update</h2>
	
	<form action="" method="POST">

	<input type="hidden" name="id" value="<?= $data["id"]; ?>">

	<label for="nama">Nama : </label>
	<input type="text" id="nama" name="nama" value="<?= $data["nama"];?>">

	<br><br>

	<label>Jenis Kelamin </label>
	<select name="jeniskelamin" value="<?= $data["jenis kelamin"];?>">
		<option>Laki - laki</option>
 		<option>Perempuan</option>
	</select>
	

	<br><br>

	<label for="alamat">Alamat : </label>
	<input type="text" id="alamat" name="alamat" value="<?= $data["alamat"];?>">

	<br><br>

	<label for="email">Email : </label>
	<input type="text" id="email" name="email" value="<?= $data["email"];?>">

	<br><br>

	<label for="foto">Foto : </label>
	<input type="file" id="foto" name="foto" value="<?= $data["foto"];?>">

	<br><br>

	<button type="submit" name="ubah">Ubah data</button>

	</form>

</body>
</html>