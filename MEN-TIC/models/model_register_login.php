<?php

	require_once("../db/db.php");

# Función : getFecha
# Parametros:
#  
# 
# Funcionalidad: 
#  devuelve la fecha en el formato especificado
#    
# Estructuras array, select
#
# retorna: $fecha
#
#
# Fecha 06/03/2021 
function getFecha(){

	date_default_timezone_set('Europe/Madrid');
	
    $fecha=getdate()['year']."-".getdate()['mon']."-".getdate()['mday'];

    return $fecha;
}


function altaUser($firstname, $lastname, $email, $password) {
	
	global $conexion;

	$id_user = "MD00".getID();
	$from_date = getFecha();
	$to_date = NULL;
	$admin = "N";

	try {

		$conexion->beginTransaction();

		$stmt = $conexion->prepare("INSERT INTO users VALUES (:id_user, :firstname, :lastname, :email, :password, :admin, :from_date, :to_date)");
		$stmt->bindParam(":id_user", $id_user);
		$stmt->bindParam(":firstname", $firstname);
		$stmt->bindParam(":lastname", $lastname);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":password", $password);
		$stmt->bindParam(":admin", $admin);
		$stmt->bindParam(":from_date", $from_date);
		$stmt->bindParam(":to_date", $to_date);
		$stmt->execute();

		$conexion->commit();
		return true;

	} catch (PDOException $ex) {
		$conexion->rollBack();
		echo $ex->getMessage();
		return false;
	}
}

function getID(){

  
    global $conexion;

		try {
			$select = $conexion->prepare("SELECT MAX(id_user) + 1 AS 'id_user' FROM users");
			$select->execute();

			return $select->fetch(PDO::FETCH_ASSOC)["id_user"];
		} catch (PDOException $ex) {
			return -1;
		}

}

function comprobarCredenciales($email, $password) {
	
	// Dado un $id_user y una $clave, se comprueba si existe algún usuario con esos credenciales
	// Devuelve NULL si no existe o hay algún fallo, o el ID del Usuario (id_user) si existe
	
	global $conexion;

	try {

		$credenciales = $conexion->prepare("SELECT id_user FROM users WHERE email = :id_user AND password = :password");
		$credenciales->bindParam(":id_user", $email);
		$credenciales->bindParam(":password", $password);
		$credenciales->execute();

		return $credenciales->fetch(PDO::FETCH_ASSOC)["id_user"];

	} catch (PDOException $ex) {
		return null;
	}

}

function crearSesionLogin($id_user) {
	
	// Dado un $id_user, se crea una sesion para mantener iniciada la sesión
	// Se guarda el ID del Usuario (id_user)

	session_start();

	$_SESSION["id_user"] = $id_user;
	
}

	
?>