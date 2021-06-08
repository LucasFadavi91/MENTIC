<?php

require_once("../models/model_register_login.php");


if (!isset($_POST) || empty($_POST)) {

    require_once("../views/view_menu_principal.php");
    $id_user = $_SESSION["id_user"];
    $userModulos = getUserModulos($id_user);


}else{

	
	 
	
   

}

?>