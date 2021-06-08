<?php

	require_once("../../db/db.php");


# Función 'comprobarCredenciales'. 
# Parámetros: $email, $password
#   
# Funcionalidad: Comprueba las credenciales que introduce el usuario en la BBDD.
# 
# Return: $credenciales
#
# Realizado: 16/04/2021
# 
# Código por MENTIC
function comprobarCredenciales($email, $password) {
	
	// Dado un $id_user y una $clave, se comprueba si existe algún usuario con esos credenciales
	// Devuelve NULL si no existe o hay algún fallo, o el ID del Usuario (id_user) si existe
	
	global $conexion;

	try {

		$sql = $conexion->prepare("SELECT password, to_date FROM users WHERE email = :email");
		$sql->bindParam(":email", $email);
		$sql->execute();
		$passCifr = $sql->fetch(PDO::FETCH_ASSOC)["password"];

		/* si la pass coincide, puede loguear */
			
		if(password_verify($password, $passCifr)){    
			
			$credenciales = $conexion->prepare("SELECT id_user FROM users WHERE email = :email AND password = :password AND to_date IS NULL");
			$credenciales->bindParam(":email", $email);
			$credenciales->bindParam(":password", $passCifr);
			$credenciales->execute();

			return $credenciales->fetch(PDO::FETCH_ASSOC)["id_user"];
		}
				
	} catch (PDOException $ex) {
		return null;
	}

}

# Función 'getNameUser'. 
# Parámetros: $id_user
#   
# Funcionalidad: Obtener el firstname.
# 
# Return: $select
#
# Realizado: 16/04/2021
# 
# Código por MENTIC
function getNameUser($id_user) {

	global $conexion;

	try {
	
		$select = $conexion->prepare("SELECT firstname FROM users WHERE id_user= :id_user");
		$select->bindParam(":id_user", $id_user);
		$select->execute();

		return $select->fetch(PDO::FETCH_ASSOC)["firstname"];

	} catch (PDOException $ex) {
		return null;
	}

}

# Función 'crearSesionLogin'. 
# Parámetros: $id_user
#   
# Funcionalidad: Crear la sesion estableciendo las variables.
# 
# Return: Ninguno
#
# Realizado: 16/04/2021
# 
# Código por MENTIC
function crearSesionLogin($id_user) {
	
	// Dado un $id_user, se crea una sesion para mantener iniciada la sesión
	// Se guarda el ID del Usuario (id_user)

	
	global $conexion;

		$stmt = $conexion->prepare("SELECT * FROM users WHERE id_user = :id_user");
		$stmt->bindParam(":id_user", $id_user);
		$stmt->execute();

		foreach($stmt->fetchAll() as $row) {
        	$name=$row['first_name'];
        	$lastname=$row['last_name'];
        	$email=$row['email'];
			$fecha=$row['from_date'];
    	}

    
		$_SESSION["id_user"] = $id_user;
		$_SESSION["name"] = $name;
		$_SESSION["lastname"] = $lastname;
		$_SESSION["email"] = $email;
		$_SESSION["fechadesde"] = $fecha;

}

# Función : getPuntos
# Parametros: $id_user
#  
# 
# Funcionalidad: 
#  devuelve los puntos totales de un user
#    
# retorna: $puntosTotales
function getPuntos($id_user){

    global $conexion;

    $stmt0 = $conexion->prepare("SELECT SUM(points_modulo) as puntosTotales FROM user_modulo WHERE id_user=:id_user");
				$stmt0->bindParam(':id_user', $id_user);
		$stmt0->execute();
    
    foreach($stmt0->fetchAll() as $row) {
        $puntosTotales=$row['puntosTotales'];
    }
    return $puntosTotales;
}

# Función : comprobarModulos
# Parametros: $id_user
#  
# 
# Funcionalidad: 
#  comprueba si el usuario tiene algun modulo registrado
#    
# retorna: $comprobar
function comprobarModulos($id_user){

     global $conexion;

        $stmt = $conexion->prepare("SELECT * FROM user_modulo WHERE id_user=:id_user");
                $stmt->bindParam(':id_user', $id_user);      
        $stmt->execute();
    
        foreach($stmt->fetchAll() as $row) {
            $comprobar=$row;
        }
        
        return $comprobar;
}
	
?>