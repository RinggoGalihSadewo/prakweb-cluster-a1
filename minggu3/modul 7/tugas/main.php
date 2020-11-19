<?php 
	
	require 'functions.php';


	if (isset($_POST["tambah"])){
		if (tambah($_POST)>0) {
			echo "<script>alert('Data berhasil ditambahkan!');</script>";
		}

		else {
			echo "<script>alert('Data gagal ditambahkan!');</script>";
		}

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu utama</title>
</head>
<body>

	<h2>DATA MAHASISWA PENS</h2>
	<p>=================================</p>
	<h2>TAMBAH DATA</h2>

	<form action="" method="post" >

	<label for="nrp">NRP: </label>
	<input type="text" id="nrp" name="nrp">
	<br>
	<label for="nama">Nama: </label>
	<input type="text" id="nama" name="nama">
	<br>
	<label for="alamat">Alamat: </label>
	<input type="text" id="alamat" name="alamat">
	<br>
	<label for="foto">Foto: </label>
	<input type="file" id="foto" name="foto">
	<br>
	<label>Jurusan: </label>
	<select name="jurusan">
		<option>Telekomunikasi</option>
		<option>Elka</option>
		<option>IT</option>
		<option>Elin</option>
	</select> 
	<br><br><br>
	<button type="submit" name="tambah">Tambah Data</button> 
	<br><br>
	
	<p>=================================</p>
	<h2>SEARCH DATA</h2>
	<br>
	<label for="nama">Nama: </label>
	<input type="text" id="nama" name="carinama">
	<button type="submit" name="btncari">Cari Data</button>
	<br>
	<p>=================================</p>
	</form>

</body>
</html>