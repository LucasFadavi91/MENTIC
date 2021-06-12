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

require_once("../../models/model_temas.php");


if (!isset($_POST) || empty($_POST)) {

    require_once("../../views/temario/view_presentacion.php");
 
}else{


}

?>