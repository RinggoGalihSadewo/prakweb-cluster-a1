<?php 









		function upload(){
		

		$namafile = $_FILES["foto"]["name"];
		$ukuranfile = $_FILES["foto"]["size"];
		$error = $_FILES["foto"]["error"];
		$tmpname = $_FILES["foto"]["tmp_name"];


		if ($error==4) {
			echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
				return false;
			}

		$ekstensiGambarValid = ["jpg","jpeg","png"];
		$ekstensiGambar = explode(".", $namafile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));	

		

		if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo "<script>
					alert('yang anda upload bukan gambar');
				</script>";
				return false;
			}

		if ($ukuranfile > 5000000){
			echo "<script>
					alert('gambar anda lebih dari 5 MB');
				</script>";
				return false;
		 	}


		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensiGambar;	

		move_uploaded_file($tmpname, '../models/img/'.$namafilebaru);

		return $namafilebaru;

	}

 ?>	