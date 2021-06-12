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

/*Probablemente este model haya que cambiarlo en un futuro "Aunque no estoy seguro"*/
require_once("../../models/models_modulos/model_modulo1.php");

if (!isset($_POST) || empty($_POST)) {

    require_once("../../views/views_modulos/view_modulo1.php");
 
}else{


}

?>