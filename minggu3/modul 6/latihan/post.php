<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

	<form action="" method="post">
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

		if (isset($_POST["submit"])) {
			echo "Nama kamu: ".$_POST["nama"]."<br>";
			echo "Umur kamu: ".$_POST["umur"];
		}

	?>

</body>
</html>