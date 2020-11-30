<?php 

	require 'functionCreateB.php';

	if (isset($_POST["tambah"])) {
			
			if (add($_POST) > 0) {
				
					echo "<script>alert('Data berhasil ditambahkan!');
					document.location.href='../views/user2.php'</script>
					
					";

					

			}

			else {

					echo "<script>alert('Data gagal ditambahkan!');
					</script>
				
					";

					
			}


		}	

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>createA</title>
 </head>
 <body>

 	<form action="" method="POST" enctype="multipart/form-data">

 		<label>Nama: </label>
 		<input type="text" name="nama">

 		<br><br>

 		<label>Jenis Kelasmin </label>
 		<select name="jeniskelamin">
 			<option>Laki - laki</option>
 			<option>Perempuan</option>
 		</select>

 		<br><br>

 		<label>Alamat: </label>
 		<input type="text" name="alamat">

 		<br><br>

 		<label>Email: </label>
 		<input type="text" name="email">

 		<br><br>

 		<button type="submit" name="tambah">Tambah data</button>

 	</form>
 
 </body>
 </html>