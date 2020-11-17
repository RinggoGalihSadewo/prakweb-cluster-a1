<?php 
	
	$kolom=$_POST["kolom"];
	$cari=$_POST["cari"];

	$conn=mysqli_connect("localhost","root","","mahasiswa");
	$query=mysqli_query($conn,"SELECT * FROM bukutamu WHERE $kolom LIKE '%$cari%'");
	$jumlah=mysqli_num_rows($query);
	echo "<br>";
	echo "Ditemukan: $jumlah <br>";
	$a=1;
	while ($row=mysqli_fetch_array($query)) {
		echo "<br>";
		echo "$a";
		echo "<br>";
		echo "Nama: ".$row[0]."<br>";
		echo "Email: ".$row[1]."<br>";
		echo "Komentar: ".$row[2]."<br>";
		$a++;
	}
 ?>