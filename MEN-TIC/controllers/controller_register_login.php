<?php

require_once("../models/model_register_login.php");

/*No se si es necesario el empty($_POST['register'])*/
if (!isset($_POST) || empty($_POST)) {

    require_once("../views/login.php");


    }else if(isset($_POST['logear']) && !isset($_POST['register'])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        $id_user = comprobarCredenciales($email, $password);

        if ($id_user != null) {

            session_start();
            
            crearSesionLogin($id_user);
        }

        header('location: ../controllers/controller_menu-principal.php');


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

        //echo "Nuevo usuario dado de alta";
        header('location: ../controllers/controller_menu-principal2.php'); 
}

/*Hay que tratar el tema de la recuperacion de sesion en caso de que ya haya una.

 else {

        if (isset($_SESSION) && isset($_SESSION["id_user"])) {
            
        
            require_once("../models/model_register_login.php");


            $id_user = $_SESSION["id_user"];
            header('location: ../controllers/controller_menu-principal.php'); 
          
        }


}*/

?>