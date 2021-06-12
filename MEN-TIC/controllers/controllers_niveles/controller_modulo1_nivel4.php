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

/* Esto es para que compruebe el ultimo SUBLEVEL del anterior NIVEL, rescata codigo */

$id_user=$_SESSION["id_user"];
$idSublevelAnterior="S15";

$puntosSublevelAnterior=getPuntosSubnivelAnterior($id_user, $idSublevelAnterior);

if ($puntosSublevelAnterior >=8) {

    require_once("../../views/views_niveles/view_modulo1_nivel4.php");
 
}else{
  header("location: ../controller_warning.php");
}

?>