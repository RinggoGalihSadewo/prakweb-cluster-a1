<?php 	
	
	
	require 'connect.php';

	function add($data){

		global $conn;

		$nama = $data["nama"];
		$jeniskelamin = $data["jeniskelamin"];
		$alamat = $data["alamat"];
		$email = $data["email"];

		mysqli_query($conn, "INSERT INTO pegawaib VALUES ('', '$nama', '$jeniskelamin' , '$alamat' , '$email')");

		return mysqli_affected_rows($conn);


	}	

 ?>