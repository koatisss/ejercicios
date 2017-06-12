





	<?php

		//para ver los errores en el navegador
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

		//hace la llamada a la base de datos
	$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'koatisss');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//query que seleciona todo de la tabla publicacion
	$sql = "SELECT * FROM publicacion";

        	//bloque que ejecuta la query
        try {

           $st = $db->prepare($sql);
           $st->execute();
        } catch(PDOException $e) {
           echo $e->getMessage();
           return false;
        }
        ?>

	<?php  // nos muestra en el select el contenido de fila ?>

        <select>
        <?php while ($fila = $st->fetch(PDO::FETCH_ASSOC)) { ?>
	

        <option value=<?php echo $fila['id'] ?>><?php echo $fila['nombre'] . ' ' . $fila['anyo'] ?></option>
	
	<?php }

	 ?>
        
	</select>


	<?php	
	$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'koatisss');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//query que seleciona todo de la tabla publicacion
	$sql = "SELECT * FROM publicacion";

        	//bloque que ejecuta la query
        try {

           $st = $db->prepare($sql);
           $st->execute();
        } catch(PDOException $e) {
           echo $e->getMessage();
           return false;
        }
        

	while ($fila = $st->fetch(PDO::FETCH_ASSOC)); {
	echo $fila ['nombre'];
	}

	var_dump($fila); ?>

	



