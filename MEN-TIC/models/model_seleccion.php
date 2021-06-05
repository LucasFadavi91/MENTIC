<?php

	require_once("../db/db.php");

# Función : getFecha
# Parametros:
#  
# 
# Funcionalidad: 
#  devuelve la fecha en el formato especificado
#    
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

# Función 'getModulos'. 
# Parámetros: ninguno
#   
# Funcionalidad: Obtener los modulos.
# 
# Return: $modulos
#
# Realizado: 16/04/2021
# 
# Código por MENTIC
function getModulos(){

	global $conexion;

    $modulos = array();
    
    $sql = "SELECT name_modulo FROM modulos ORDER BY name_modulo";

    foreach ($conexion->query($sql) as $row) {
        $modulos[]=$row['name_modulo'];
    }

    return $modulos;
}

# Función : getModuloId
# Parametros: $modulo
#  
# 
# Funcionalidad: 
#  elimina los caracteres separadores
#    
# retorna: id_modulo
function getModuloId($modulo){

    global $conexion;
 
    $sql = "SELECT id_modulo FROM modulos where name_modulo='$modulo'";

    foreach ($conexion->query($sql) as $row) {
        $id_modulo=$row['id_modulo'];
    }

    return $id_modulo;

}

# Función : altaModulos
# Parametros: $id_user
#  
# 
# Funcionalidad: 
#  Da de alta los modulos que selecciona el alumno
#    
# retorna: nada
function altaModulos($id_user, $id_modulo){

    global $conexion;

    $points_modulo=0;
   
    $stmt = $conexion->prepare("INSERT INTO user_modulo (id_user, id_modulo, points_modulo) VALUES (:id_user, :id_modulo, :points_modulo)");

        $stmt->bindParam(':id_user', $id_user);
        $stmt->bindParam(':id_modulo', $id_modulo);
        $stmt->bindParam(':points_modulo', $points_modulo);
    
    $stmt->execute();
 

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

        $stmt = $conexion->prepare("SELECT id_modulo FROM user_modulo WHERE id_user=:id_user");
        $stmt->bindParam(':id_user', $id_user);      
        $stmt->execute();
    
        foreach($stmt->fetchAll() as $row) {
            $comprobar=$row;
        }
        
        return $comprobar;
}
	
?>