

		<?php
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'Admin123');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM publicacion";

		try {

		   $st = $db->prepare($sql);
		   $st->execute();
		} catch(PDOException $e) {
		   echo $e->getMessage();
		   return false;
		}
		?>


		<form action="nuevo_publicacion.php" method="post">
			<label>Publicacion</label>
			<input type="text" name="nombre">
			<label>Temporada</label>
			<input type="text" name="anyo">

	<select name="editorial_id">
        <?php while ($fila = $st->fetch(PDO::FETCH_ASSOC)) { ?>
	

        <option value=<?php echo $fila['id'] ?>><?php echo $fila['nombre'] . ' ' . $fila['anyo'] ?></option>
	
	<?php } ?>
        
	</select>

		<?php

		$sql = "SELECT * FROM categoria_publicacion";

		try {

		   $st = $db->prepare($sql);
		   $st->execute();
		} catch(PDOException $e) {
		   echo $e->getMessage();
		   return false;
		}
		?>

	<select name="categoria_publicacion_id">
        <?php while ($fila = $st->fetch(PDO::FETCH_ASSOC)) { ?>
	

        <option value=<?php echo $fila['id'] ?>><?php echo $fila['nombre'] ?></option>
	
	<?php } ?>
        
	</select>

			<input type="submit" value="enviar">
		</form>

