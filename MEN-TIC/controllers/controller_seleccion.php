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

    $modulos=getModulos($_SESSION["id_user"]);

    require_once("../views/view_seleccion.php");
 
}else{

	   $id_user = $_SESSION["id_user"];
	   $modulo = $_POST['modulos'];
	   $comprobar = comprobarModulos($id_user);
	   $modulosAlta = 0;
	   //var_dump($comprobar);

	 	foreach ($modulo as $value) {
            $modulo = $value;
            //var_dump($modulo);
            $id_modulo = getModuloId($modulo);
            //var_dump($id_modulo);
			altaModulos($id_user, $id_modulo);
			$modulosAlta++;
        }

		if($modulosAlta != 0){
			header("location: ../controllers/controller_menu_principal.php");        
		}else{
			header("location: ../controllers/controller_seleccion.php");   
		}
						 		
   
}	

?>
