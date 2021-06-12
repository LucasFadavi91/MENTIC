<?php

require_once("../models/model_register_login.php");

/*No se si es necesario el empty($_POST['register'])*/
if (!isset($_POST) || empty($_POST)) {

    require_once("../views/view_login.php");


    }else if(isset($_POST['logear']) && !isset($_POST['register'])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        $id_user = comprobarCredenciales($email, $password);
        if ($id_user != null) {

            session_start();
            
            crearSesionLogin($id_user);
        }

        $comprobar=comprobarModulos($id_user);

        if($comprobar != 0){     
            header("location: ../controllers/controller_menu_principal.php");     
        }else{
            header("location: ../controllers/controller_seleccion.php");    
        }

    }else if(isset($_POST['register']) && !isset($_POST['logear'])){

        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email     = $_POST['email'];
        $password  = $_POST['password'];


        //Damos de alta un nuevo user en la bbdd
        $nuevoUser = altaUser($firstname, $lastname, $email, $password);

        $id_user = comprobarCredenciales($email, $password);
        

        if ($id_user != null) {

            session_start();

            crearSesionLogin($id_user);
        }

        $comprobar=comprobarModulos($id_user);

        if($comprobar != 0){     
            header("location: ../controllers/controller_menu_principal.php");     
        }else{
            header("location: ../controllers/controller_seleccion.php");    
        }

}

?>