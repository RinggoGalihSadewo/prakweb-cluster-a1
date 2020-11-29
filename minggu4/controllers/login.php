<?php 


	if (isset($_POST["login"])) {

		$username = $_POST["username"];
		$password = $_POST["password"];


		if ($username == "admin" && $password == "admin") {
				
			header("Location: ../views/admin.php");

		}

		else if ($username == "user1" && $password == "user1") {
				
			header("Location: ../views/user1.php");

		}

		else if ($username == "user2" && $password == "user2") {
				
			header("Location: ../views/user2.php");

		}


		else {

			echo "login gagal!";

		}

	}
		
	
 ?>