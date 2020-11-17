<!DOCTYPE html>
<html>
<head>
	<title>Simpan Buku Tamu</title>
</head>
<body>

	<h1>Simpan Buku Tamu MySQLi</h1>
	<?php 
		$nama=$_POST["nama"];
		$email=$_POST["email"];
		$komentar=$_POST["komentar"];

		$conn=mysqli_connect("localhost","root","","mahasiswa"); 
		echo "Nama: $nama <br>";
		echo "email: $email <br>";
		echo "komentar: $komentar <br>";

		$query="INSERT INTO bukutamu VALUES ('$nama','$email','$komentar')";
		mysqli_query($conn,$query);
		echo "Simpan Buku Tamu berhasil dilakukan";
	 ?>

</body>
</html>