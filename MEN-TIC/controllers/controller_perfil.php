<?php 

  session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	  //exit("No estas logueado, datos incorrectos.");
    //Redirecciono al login
    header("location: ../controllers/controller_register_login.php");
    exit;
		
	}
?>
<?php

$id_user=$_SESSION["id_user"];

require_once("../models/model_register_login.php");
require_once("../models/model_temas_gestion.php");

$esAdmin=esAdmin($id_user);

if ($esAdmin == 'S') {

    require_once("../views/view_perfil_admin.php");

}else{

    require_once("../views/view_perfil.php");

}

?>