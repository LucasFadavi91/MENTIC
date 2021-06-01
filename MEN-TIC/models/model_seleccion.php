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

# Función 'getCategories'. 
# Parámetros: ninguno
#   
# Funcionalidad: Obtener las categorias.
# 
# Return: $categories
#
# Realizado: 16/04/2021
# 
# Código por MENTIC

function getModulos($id_user){

	global $conexion;

    $modulos = array();
    
    $sql = "SELECT id_modulo FROM user_modulo WHERE id_user='$id_user' ORDER BY id_modulo";

    foreach ($conexion->query($sql) as $row) {
        $modulos[]=$row['id_modulo'];
    }

    return $modulos;
}




	
?>