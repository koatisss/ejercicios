
<?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

	$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'koatisss');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql= 'SELECT * FROM editorial';

	try {
            $st = $db->prepare($sql);
            $st->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
?>
	<table>

        <tr>
<?php
        $primeraFila = $st->fetch(PDO::FETCH_ASSOC);


	foreach ($primeraFila as $clave => $columna) {
          echo '<td>' . $clave . '</td>';
        }

?>
	</tr>
	<tr>

<?php 
	foreach ($primeraFila as $elementosPrimeraFila) {
	  echo '<td>' . $elementosPrimeraFila . '</td>';
	}

	$segundaFila = $st->fetch(PDO::FETCH_ASSOC);
	
?>
	</tr>
<?php

	while($fila = $st->fetch(PDO::FETCH_ASSOC)) {

		echo '<tr>';
		echo '<td>' . $fila['id'] . '</td>';
		echo '<td>' . $fila['nombre'] . '</td>';
		echo '</tr>';
	}


      //die("fasf");

?>























