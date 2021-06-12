<?php

	require_once("../../db/db.php");

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

# Función : getUserModulos
# Parametros: $id_user
#  
# 
# Funcionalidad: 
#  Consigue los modulos de un user
#    
# retorna: $userModulo

function getUserModulos($id_user){

    global $conexion;

   	$userModulo = array();

    $stmt = $conexion->prepare("SELECT modulos.name_modulo FROM modulos JOIN user_modulo ON modulos.id_modulo=user_modulo.id_modulo WHERE id_user=:id_user");
    $stmt->bindParam(':id_user', $id_user);
    $stmt->execute();
    
    foreach($stmt->fetchAll() as $row) {
        $userModulo[]=$row['name_modulo'];
    }
    return $userModulo;
}


# Función : getNumeroModulo
# Parametros: $name_modulo
#  
# 
# Funcionalidad: 
#  Saca el numero del modulo
#    
# retorna: $numeroModulo

function getNumeroModulo($name_modulo){

  
    global $conexion;

		try {
			$select = $conexion->prepare("SELECT id_modulo AS 'id' FROM modulos WHERE name_modulo='$name_modulo'");
			$select->execute();

    		foreach($select->fetchAll() as $row) {
        		$id=$row['id'];
    		}

		    /*Con ltrim quitamos la M del codigo que hemos obtenido de la database*/
		    $numeroModulo= ltrim($id, "M");

			return $numeroModulo;

		} catch (PDOException $ex) {
			return -1;
		}

}





# Función : comprobarEstadoTema
# Parametros: $tema
#  
# 
# Funcionalidad: 
# comprueba si un tema está cerrado o abierto
#    
# retorna: $estado
function comprobarEstadoTema($tema) {

    global $conexion;

    $stmt0 = $conexion->prepare("SELECT estado  FROM levels WHERE name_level=:name_level");
        $stmt0->bindParam(':name_level', $tema);
		$stmt0->execute();
    
    foreach($stmt0->fetchAll() as $row) {
        $estado=$row['estado'];
    }
    return $estado;
}



function getnameTema($tema) {

	global $conexion;

    $stmt0 = $conexion->prepare("SELECT name_level  FROM levels WHERE id_level=:id_level");
        $stmt0->bindParam(':id_level', $tema);
		$stmt0->execute();

		foreach($stmt0->fetchAll() as $row) {
			$name=$row['name_level'];
		}
		return $name;
}

	
?>