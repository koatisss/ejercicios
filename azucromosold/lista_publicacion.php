
<?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

	$db = new PDO('mysql:host=localhost;dbname=azucromo1;charset=utf8', 'root', 'Admin123');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql= 'SELECT * FROM publicacion';

	try {
            $st = $db->prepare($sql);
            $st->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
?>


    <head>
        <title>pruebas php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos_php.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

 
        
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    </head>
    <body>

	<table id="myTable" class="display table table-striped">
	<thead class="thead-inverse">
        <tr>
<?php
        $primeraFila = $st->fetch(PDO::FETCH_ASSOC);

	foreach ($primeraFila as $clave => $columna) {
          echo '<td>' . $clave . '</td>';
        }

?>
	</tr>
	</thead>
	<tbody>
	<tr>


<?php foreach ($primeraFila as $clave => $columna) {
		echo '<td>' . $columna . '</td>';
	}

?>
	</tr>
	<tr>
<?php 
	$segundaFila = $st->fetch(PDO::FETCH_ASSOC);
	
foreach ($segundaFila as $clave => $dato) {
		echo '<td>' . $dato . '</td>';
	}
	
?>
	</tr>
<?php

	while($fila = $st->fetch(PDO::FETCH_ASSOC)) {

		echo '<tr>';
		echo '<td>' . $fila['id'] . '</td>';
		echo '<td>' . $fila['nombre'] . '</td>';
		echo '<td>' . $fila['anyo'] . '</td>';
		echo '<td>' . $fila['editorial_id'] . '</td>';
		echo '<td>' . $fila['categoria_publicacion_id'] . '</td>';
		echo '</tr>';
	}

?>
	</tbody>
	</table>
		<script>
            $(document).ready(function(){ $('#myTable').DataTable(); });
        	</script>
	</body>
	























