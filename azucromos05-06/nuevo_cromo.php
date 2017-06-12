


			
			<?php

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);

			$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'Admin123');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO cromo 
				(nombre, publicacion_id, equipo_id, cantidad, precio) 
				VALUES ('".$_POST['nombre']."','".$_POST['publicacion_id']."','".$_POST['equipo_id']."','".$_POST['cantidad']."','".$_POST['precio']."')";

			try {
			    $st = $db->prepare($sql);
			    $st->execute();
			} catch (PDOException $e) {
			    echo $e->getMessage();
			    return false;
			}


	

	
			?>

