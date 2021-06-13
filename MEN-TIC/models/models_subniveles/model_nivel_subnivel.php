<?php

	require_once("../../db/db.php");


# Función : subirPuntos()
# Parametros: $id_user, $id_sublevel, $id_level, $id_modulo, $puntos
#  
# 
# Funcionalidad: 
#  Inserta y actualiza los puntos del usuario al realziar los test en las diferentes tablas
#    
# retorna: no hay return

	function subirPuntos($id_user, $id_sublevel, $id_level, $id_modulo, $puntos){

		global $conexion;
	
	
		$stmt0 = $conexion->prepare("SELECT points_sublevel FROM user_sublevel WHERE id_user=:id_user AND id_sublevel=:id_sublevel");
				$stmt0->bindParam(':id_user', $id_user);
				$stmt0->bindParam(':id_sublevel', $id_sublevel);
		$stmt0->execute();
	
	
		if($stmt0->rowCount() != 0){ //si ya hizo el test anteriormente

			foreach($stmt0->fetchAll() as $row) {
				$puntosAntes=$row['points_sublevel'];
			}

			$diferencia = $puntos-$puntosAntes;


			if($puntos>$puntosAntes){ //si ha sacado mas puntos ahora

				/* UPDATE PUNTOS EN EL SUBLEVELS */

				$stmt = $conexion->prepare("UPDATE user_sublevel SET points_sublevel=:puntos WHERE id_user=:id_user AND id_sublevel=:id_sublevel");
							$stmt->bindParam(':puntos',$puntos);
							$stmt->bindParam(':id_user', $id_user);
							$stmt->bindParam(':id_sublevel', $id_sublevel);
		
				$stmt->execute();

				/* UPDATE PUNTOS EN LA TABLA LEVELS */
				
				$stmt = $conexion->prepare("UPDATE user_level SET points_level=points_level+:puntos WHERE id_user=:id_user AND id_level=:id_level");
							$stmt->bindParam(':puntos',$diferencia);
							$stmt->bindParam(':id_user', $id_user);
							$stmt->bindParam(':id_level', $id_level);
		
				$stmt->execute();

				/* UPDATE PUNTOS EN LA TABLA MODULOS */

				$stmt4 = $conexion->prepare("UPDATE user_modulo SET points_modulo=points_modulo+:puntos WHERE id_user=:id_user AND id_modulo=:id_modulo");
						$stmt4->bindParam(':puntos',$diferencia);
						$stmt4->bindParam(':id_user', $id_user);
						$stmt4->bindParam(':id_modulo', $id_modulo);
		
				$stmt4->execute();

			}

		}else{  //si es la primera vez que hace el test	

			/* INSERT DE LOS PUNTOS EN EL SUBLEVELS */

				$stmt2 = $conexion->prepare("INSERT INTO user_sublevel (id_user, id_sublevel, points_sublevel) VALUES (:id_user, :id_sublevel, :puntos)");
					$stmt2->bindParam(':id_user', $id_user);
					$stmt2->bindParam(':id_sublevel', $id_sublevel);
					$stmt2->bindParam(':puntos', $puntos);
					
				$stmt2->execute();
	
			/* UPDATE/INSERT EN LEVELS */

			$stmt = $conexion->prepare("SELECT points_level FROM user_level WHERE id_user=:id_user AND id_level=:id_level");
				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindParam(':id_level', $id_level);
			$stmt->execute();
	
	
			if($stmt->rowCount() != 0){ // si ya tiene registro en level

				foreach($stmt->fetchAll() as $row) {
					$points_level=$row['points_level'];
				}

				$nuevosPuntosLevel= $points_level + $puntos;

				$stmt = $conexion->prepare("UPDATE user_level SET points_level=:puntos WHERE id_user=:id_user AND id_level=:id_level");
							$stmt->bindParam(':puntos',$nuevosPuntosLevel);
							$stmt->bindParam(':id_user', $id_user);
							$stmt->bindParam(':id_level', $id_level);
				$stmt->execute();


			}else{ //si no tenía registro en level

				$stmt2 = $conexion->prepare("INSERT INTO user_level (id_user, id_level, points_level) VALUES (:id_user, :id_level, :puntos)");
					$stmt2->bindParam(':id_user', $id_user);
					$stmt2->bindParam(':id_level', $id_level);
					$stmt2->bindParam(':puntos', $puntos);	
				$stmt2->execute();
			}

			/* UPDATE/INSERT EN MODULOS */

			$stmt = $conexion->prepare("SELECT points_modulo FROM user_modulo WHERE id_user=:id_user AND id_modulo=:id_modulo");
				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindParam(':id_modulo', $id_modulo);
			$stmt->execute();
	
	
			if($stmt->rowCount() != 0){ // si ya tiene registro en modulo


				$stmt1 = $conexion->prepare("UPDATE user_modulo SET points_modulo=points_modulo+:puntos WHERE id_user=:id_user AND id_modulo=:id_modulo");
						$stmt1->bindParam(':puntos',$puntos);
						$stmt1->bindParam(':id_user', $id_user);
						$stmt1->bindParam(':id_modulo', $id_modulo);
		
				$stmt1->execute();


			}else{ //si no tenía registro en modulo

				$stmt2 = $conexion->prepare("INSERT INTO user_modulo (id_user, id_modulo, points_modulo) VALUES (:id_user, :id_modulo, :puntos)");
					$stmt2->bindParam(':id_user', $id_user);
					$stmt2->bindParam(':id_modulo', $id_modulo);
					$stmt2->bindParam(':puntos', $puntos);	
				$stmt2->execute();
			}

		}
	}	
?>