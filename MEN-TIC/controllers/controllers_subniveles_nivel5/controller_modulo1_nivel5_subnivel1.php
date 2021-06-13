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


require_once("../../models/models_modulos/model_modulo1.php");

$puntosModulo=getPuntos($_SESSION["id_user"]);




header("location: ../../views/tests/tests_subniveles_nivel5/test1/index.html");





?>