<?php
	session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	//exit("No estas logueado, datos incorrectos.");
	//Redirecciono al login
	header("location: ../../controllers/controller_register_login.php");
	exit;	
	}
?>

<?php

	/* Información necesaria */
	$puntos= $_POST['restart'];
	$id_user = $_SESSION["id_user"];
	$id_sublevel = "S27";
	$id_level = "L6";
	$id_modulo= "M1";

	require_once("../../models/models_subniveles/model_nivel_subnivel.php");

	subirPuntos($id_user, $id_sublevel, $id_level, $id_modulo, $puntos);

	header("location: ../../controllers/controllers_niveles/controller_modulo1_nivel6.php");



?>