<?php 

	$conn = mysqli_connect("localhost","root","","mahasiswa");

	$query = "SELECT * FROM informatika";

	$result = mysqli_query($conn,$query);

	while ($row=mysqli_fetch_array($result)){
		print_r($row);
	}

 ?>