<?php

require_once("../models/model_seleccion.php");

if (!isset($_POST) || empty($_POST)) {

	$modulos=getModulos($_SESSION["id_user"]);

    require_once("../views/view_seleccion.php");
 
}else{


	 $modulos = $_POST['modulos'];

	 if (is_array($modulos)){

	  foreach ($modulos as $modulo) 
		{
	 		var_dump($modulos);
		}
	}
            /*foreach ($_POST['categories'] as $categories) {
                var_dump($categories);
            }*/
        
}	

?>