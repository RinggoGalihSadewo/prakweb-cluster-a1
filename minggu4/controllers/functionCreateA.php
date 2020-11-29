<?php 	
	
	require 'imgA.php';
	require 'connect.php';

	function add($data){

		global $conn;

		$foto = upload();
		$nama = $data["nama"];
		$jeniskelamin = $data["jeniskelamin"];
		$alamat = $data["alamat"];
		$email = $data["email"];

		if (!$foto) {
			return false;
		}

		mysqli_query($conn, "INSERT INTO pegawaia VALUES ('', '$foto', '$nama', '$jeniskelamin' , '$alamat' , '$email')");

		return mysqli_affected_rows($conn);


	}	

 ?>