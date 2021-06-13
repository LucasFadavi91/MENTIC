<?php 

  session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	
    header("location: ../controllers/controller_register_login.php");
    exit;
		
	}
?>
<?php

$id_user=$_SESSION["id_user"];

require_once("../models/model_register_login.php");
require_once("../models/model_temas_gestion.php");

$temas=getTemarios();
$esAdmin=esAdmin($id_user);

    //tengo que comprobar si el user es admin

if ($esAdmin == 'S') {

    if (!isset($_POST) || empty($_POST)) {

        require_once("../views/view_temas_gestion.php");
    
    }else if(isset($_POST['abrirTema'])){

        $temaModificar = $_POST['tema'];

        //CODIGO CUANDO ABRES UN TEMARIO
        //AQUI VAN LOS $_POST
        abrirTemario($temaModificar);
        header('refresh: 0');


    }else if(isset($_POST['cerrarTema'])){

        $temaModificar = $_POST['tema'];

        //CODIGO CUANDO CIERRAS UN TEMARIO
        //AQUI VAN LOS $_POST
        cerrarTemario($temaModificar);
        header('refresh: 0');


    }



    
 
}else{//SI NO ERES ADMIN



}

?>