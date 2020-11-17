<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>

	<form action="" method="get">
		<label>Masukan Nama: </label>
		<input type="text" name="nama">
		<br><br>
		<label>Masukan umur kamu: </label>
		<input type="number" name="umur">
		<br><br>
		<button type="submit" name="submit">Input</button>
	</form>

	<br><br>

	<?php  

		if (isset($_GET["submit"])) {
			echo "Nama kamu: ".$_GET["nama"]."<br>";
			echo "Umur kamu: ".$_GET["umur"];
		}

	?>

</body>
</html>