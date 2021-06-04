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

require_once("../models/model_seleccion.php");

if (!isset($_POST) || empty($_POST)) {

	$modulos=getModulos();

    require_once("../views/view_seleccion.php");
 
}else{

	   $id_user = $_SESSION["id_user"];
	   $modulo = $_POST['modulos'];
	   $comprobar=comprobarModulos($id_user);

	   	if($comprobar==0){

		 	foreach ($modulo as $value) {
	            $modulo= $value;
	            //var_dump($modulo);
	            $id_modulo=getModuloId($modulo);
	            //var_dump($id_modulo);
				altaModulos($id_user, $id_modulo);
	        }
	        
		}else if(empty($_POST['alta'])){
			header("location: ../controllers/controller_seleccion.php");
		}else{
			 header("location: ../controllers/controller_menu_principal.php");
		}	 	
	 		
   
}	

?>