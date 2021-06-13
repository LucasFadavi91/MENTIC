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

$id_user=$_SESSION["id_user"];
$idSublevelAnterior="S9";

$puntosSublevelAnterior=getPuntosSubnivelAnterior($id_user, $idSublevelAnterior);

if ($puntosSublevelAnterior >=8) {

  header("location: ../../views/tests/tests_subniveles_nivel2/test5/index.html");

}else{
  header("location: ../controller_warning.php");
}



?>