<?php

	/*	
	$servername = "localhost";
	$username = "id17043905_menticuser";
	$password = "@N[%9uoh5Q41yQeN";
	$database = "id17043905_menticdatabase";
	*/

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mentic";

	try {
		$conexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password); 	 	 	 	 	 	
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	 	 	 	 	 	
	} catch (PDOException $ex) {
		echo $ex->getMessage(); 	 	 	 	 	 	
	}
	

?>