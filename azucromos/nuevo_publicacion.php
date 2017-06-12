			






			<?php

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);

			$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'koatisss');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO publicacion 
				(nombre, anyo, editorial_id, categoria_publicacion_id) 
				VALUES ('".$_POST['nombre']."','".$_POST['anyo']."','".$_POST['editorial_id']."','".$_POST['categoria_publicacion_id']."')";

			try {
			    $st = $db->prepare($sql);
			    $st->execute();
			} catch (PDOException $e) {
			    echo $e->getMessage();
			    return false;
			}


	

	
			?>




