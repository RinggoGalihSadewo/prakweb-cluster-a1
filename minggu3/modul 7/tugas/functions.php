<?php 

	$conn = mysqli_connect("localhost","root","","prakwebm3") or die("koneksi ke database gagal");

	function tambah($data){

		global $conn;

		$nrp = $data["nrp"];
		$nama = $data["nama"];
		$alamat = $data["alamat"];
		$foto = $data["foto"];
		$jurusan = $data["jurusan"];

		if ($data["jurusan"] == "Telekomunikasi") {

			$id_tel = "233TEL";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_tel')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Elka") {

			$id_elka = "311ELK";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_elka')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "IT") {

			$id_it = "363IT";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_it')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Elin") {

			$id_eli = "337ELI";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_eli')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

	}

 ?>