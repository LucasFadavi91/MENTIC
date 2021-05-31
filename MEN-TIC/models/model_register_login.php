<?php

	require_once("../db/db.php");

# Función : getFecha
# Parametros:
#  
# 
# Funcionalidad: 
#  devuelve la fecha en el formato especificado
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

# Función 'altaUser'. 
# Parámetros: $firstname, $lastname, $email, $password
#   
# Funcionalidad: Da de alta un usario nuevo en la BBDD.
# 
# Return: $true/false
#
# Realizado: 16/04/2021
# 
# Código por MENTIC
function altaUser($firstname, $lastname, $email, $password) {
	
	global $conexion;

	$id_user = getID();
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
		$stmt->bindparam(':password',$hashed_password); /* cifrado */
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
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


# Función 'getID'. 
# Parámetros: ninguno
#   
# Funcionalidad: Obtener el ultimo id_user.
# 
# Return: $num
#
# Realizado: 16/04/2021
# 
# Código por MENTIC
function getID(){

  
    global $conexion;

		try {
			$select = $conexion->prepare("SELECT MAX(id_user) AS 'id_user' FROM users");
			$select->execute();

    		foreach($select->fetchAll() as $row) {
        		$num=$row['id_user'];
        		//var_dump($row);
    		}

			/*En la variable num sacamos 'D00X', el id del user */
            //echo "Esto es num: ".$num . "<br>";
            //var_dump($num) . "<br>";

		    /*Con ltrim quitamos la D del codigo que hemos obtenido de la database*/
		    $num= ltrim($num, "U");
		            //echo $num . "<br>";
		    /*Con intval pasamos el string a numero para poder sumarle un 1 después*/
		    $num= intval($num);
		            //echo $num . "<br>";
		    $num=$num+1;
		   
		    //con lo siguiente añadimos los ceros y la D delante del codigo
		    $num = str_pad($num,3,"0",STR_PAD_LEFT);
		    $num = str_pad($num,4,"U",STR_PAD_LEFT);

			return $num;

		} catch (PDOException $ex) {
			return -1;
		}

}

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
    	}

    
		$_SESSION["id_user"] = $id_user;
		$_SESSION["name"] = $name;
		$_SESSION["lastname"] = $lastname;
		$_SESSION["email"] = $email;

}

	
?>