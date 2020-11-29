<?php 
	
	require 'connect.php';

	function view($data){

	global $conn;

		$result = mysqli_query($conn, $data);

		$rows = [];

		while ($row = mysqli_fetch_assoc($result)) {
			
			$rows [] = $row;

		}

		return $rows;


	}	

 ?>