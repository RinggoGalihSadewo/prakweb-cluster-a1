<?php 
	
	require 'connect.php';


	function hapus($id){

		global $conn;
		
		mysqli_query($conn,"DELETE FROM pegawaia WHERE id = $id");

		return mysqli_affected_rows($conn);

	}	

	$id = $_GET["id"];

	if (hapus($id) > 0 ) {
		
		echo "
			<script> 
				alert ('data berhasil dihapus!');
				document.location.href='../views/user1.php';
			</script>
			";
	}

	else {

		echo "<script> alert ('data gagal dihapus!');
				</script>";

	}


 ?>