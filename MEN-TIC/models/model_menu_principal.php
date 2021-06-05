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
	
?>