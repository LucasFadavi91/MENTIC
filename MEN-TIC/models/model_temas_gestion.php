<?php

require_once("../db/db.php");


# Función : esAdmin
# Parametros: $id_user
#  
# 
# Funcionalidad: 
# comprueba si un usuario es admin
#    
# retorna: $esAdmin
function esAdmin($id_user) {

    global $conexion;

    $stmt0 = $conexion->prepare("SELECT admin  FROM users WHERE id_user=:id_user");
        $stmt0->bindParam(':id_user', $id_user);
		$stmt0->execute();
    
    foreach($stmt0->fetchAll() as $row) {
        $esAdmin=$row['admin'];
    }
    return $esAdmin;
}


# Función : getTemarios
# Parametros:
#  
# 
# Funcionalidad: 
# guarda en un array los distintos temas
#    
# retorna: $temas
function getTemarios(){

    global $conexion;

    $temas = array();

    $stmt = $conexion->prepare("SELECT name_level FROM levels");
    $stmt->execute();
    
    foreach($stmt->fetchAll() as $row) {
        $temas[]=$row['name_level'];
    }
    return $temas;
}

# Función : abrirTemario
# Parametros:
#  
# 
# Funcionalidad: 
# cambia el estado de un tema a S (abierto)
#    
# retorna:
function abrirTemario($tema){

    global $conexion;

    $stmt = $conexion->prepare("UPDATE levels SET estado = 'S' WHERE name_level=:tema");
        $stmt->bindParam(':tema', $tema);
        $stmt->execute();

}


# Función : cerrarTemario
# Parametros:
#  
# 
# Funcionalidad: 
# cambia el estado de un tema a N (cerrado)
#    
# retorna:
function cerrarTemario($tema){

    global $conexion;

    $stmt = $conexion->prepare("UPDATE levels SET estado = 'N' WHERE name_level=:tema");
        $stmt->bindParam(':tema', $tema);
        $stmt->execute();

}


?>