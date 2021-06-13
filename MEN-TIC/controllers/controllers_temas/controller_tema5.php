<?php 

  session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	  //exit("No estas logueado, datos incorrectos.");
    //Redirecciono al login
    header("location: ../../controllers/controller_register_login.php");
    exit;
		
	}
?>
<?php


require_once("../../models/model_temas.php");

$id_tema='L5';
$tema=getnameTema($id_tema);
$estadoTema=comprobarEstadoTema($tema);

if ($estadoTema == 'S') {

    require_once("../../views/temario/view_tema5.php");
 
}else{

  header("location: ../controller_warning_temas.php");

}

?>