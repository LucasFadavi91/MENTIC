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
function getCategories(){

	global $conexion;

    $categories = array();
    
    $sql = "SELECT name_category FROM categories ORDER BY name_category";

    foreach ($conexion->query($sql) as $row) {
        $categories[]=$row['name_category'];
    }

    return $categories;
}




	
?>