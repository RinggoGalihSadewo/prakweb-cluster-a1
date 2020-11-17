<!DOCTYPE html>
<html>
<head>
	<title>Tugas2</title>
</head>
<body>

	<form action="" method="get">
		
		<label for="nama">Masukan Nama: </label>
		<input type="type" id="nama" name="nama" required>
		<br><br>
		<label for="warna">Pilih warna: </label>
		<input type="text" id="warna" name="warna" placeholder="Hitam, Hijau dan Biru">
		<br><br>
		<button type="submit" name="input">Input</button>

	</form>

	<br>

	<?php 

		function tampil($nama,$warna){

			$countname=strlen($nama);
			$sum=0;


			if ($countname<=10 && $countname>=1 ) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+300;
				}

				if ($warna=="hitam" || $warna=="Hitam") {
					echo "<font style='color: black;'> Harga bet: $sum <br></font>";
				}

				else if ($warna=="hijau" || $warna=="Hijau") {
					echo "<font style='color: Green;'> Harga bet: $sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru") {
					echo "<font style='color: blue;'> Harga bet: $sum <br></font>";
				}

				else if (is_null($warna)) {
					echo "<font style='color: red;'> Harga bet: $sum <br></font>";
				}

			}

			else if ($countname>=11 && $countname<=20 ) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+500;
				}

				if ($warna=="hitam" || $warna=="Hitam") {
					echo "<font style='color: black;'> Harga bet: $sum <br></font>";
				}

				else if ($warna=="hijau" || $warna=="Hijau") {
					echo "<font style='color: Green;'> Harga bet: $sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru") {
					echo "<font style='color: blue;'> Harga bet: $sum <br></font>";
				}

				else if (is_null($warna)) {
					echo "<font style='color: red;'> Harga bet: $sum <br></font>";
				}

			}

			else if ($countname>20) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+700;
				}

				if ($warna=="hitam" || $warna=="Hitam") {
					echo "<font style='color: black;'> Harga bet: $sum <br></font>";
				}

				else if ($warna=="hijau" || $warna=="Hijau") {
					echo "<font style='color: Green;'> Harga bet: $sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru") {
					echo "<font style='color: blue;'> Harga bet: $sum <br></font>";
				}

				else if (is_null($warna)) {
					echo "<font style='color: red;'> Harga bet: $sum <br></font>";
				}

			}
			
		}

		if (isset($_GET["input"])) {
			tampil($_GET["nama"],$_GET["warna"]);
		}

 ?>

</body>
</html>


