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
function getFecha(){

	date_default_timezone_set('Europe/Madrid');
	
    $fecha=getdate()['year']."-".getdate()['mon']."-".getdate()['mday'];

    return $fecha;
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

function getUserModulos($id_user){

    global $conexion;

    $userModulo = array();

    $stmt = $conexion->prepare("SELECT name_modulo.modulos FROM modulos JOIN user_modulo ON modulos.id_modulo=user_modulo.id_modulo WHERE id_user=:id_user");
    $stmt->bindParam(':id_user', $id_user);
    $stmt->execute();
    
    foreach($stmt->fetchAll() as $row) {
        $userModulo[]=$row['name_modulo'];
    }
    return $userModulo;
}
	
?>