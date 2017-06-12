


		<?php                

                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);


                $db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'koatisss');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                
                $sql = "SELECT * FROM equipo";

                
                
                try {
                    $st = $db->prepare($sql);
                    $st->execute();
                } catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }


		$columnas = $st->fetch(PDO::FETCH_ASSOC);

                foreach ($columnas as $clave => $columna) {
                    if ($clave == 'nombre') {
                        echo '<label for = "nombre">'Nombre del alumno:'</label>';
                        echo '<input type = "text" name = "' . $clave . '" value = "' . $columna . '" >';
		}



		var_dump($columna);
		
		?>
