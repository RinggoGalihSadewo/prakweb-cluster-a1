<?php 





	
	
	$conn = mysqli_connect("localhost", "root", "", "minggu4") or die ("Koneksi ke database gagal");

	function update($data) {

		global $conn;

		$id = $data["id"];
		$nama = $data["nama"];
		$jeniskelamin = $data["jeniskelamin"];
		$alamat = $data["alamat"];
		$email = $data["email"];

		$query = "UPDATE pegawaia SET nama = '$nama',
				jeniskelamin = '$jeniskelamin', alamat = '$alamat',
				email = '$email' WHERE id = $id
		";

		mysqli_query($conn, $query);

		//mengecek jika +1 maka berhasil, jika -1 maka gagal
		return mysqli_affected_rows($conn);
		

	}

 ?>