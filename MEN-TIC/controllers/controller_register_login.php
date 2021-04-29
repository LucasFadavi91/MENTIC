<?php

require_once("../models/model_register.php");

/*No se si es necesario el empty($_POST['register'])*/
if (!isset($_POST) || empty($_POST)) {

    require_once("../views/login.php");

    }else if(!isset($_POST['submit']) == "logear"){

        $email = $_POST["email"];
        $password = $_POST["password"];

        $id_user = comprobarCredenciales($email, $password);

        if ($id_user != null) {
            
            crearSesionLogin($id_user);

    
        }
        header('location: ../views/menu.php');

    }else if(!isset($_POST['submit']) == "register"){

        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email     = $_POST['email'];
        $password     = $_POST['password'];


        //Damos de alta un nuevo user en la bbdd
        $nuevoUser = altaUser($firstname, $lastname, $email, $password);

        echo "Nuevo usuario dado de alta";

    
}

?>