<?php 

	


	$conn=mysqli_connect("localhost","root","","mahasiswa");
	$query=mysqli_query($conn,"SELECT * FROM bukutamu");
	$jumlah=mysqli_num_rows($query);
	echo "<center>Daftar Pengunjung</center>";
	echo "Jumlah pengunjung: $jumlah";
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