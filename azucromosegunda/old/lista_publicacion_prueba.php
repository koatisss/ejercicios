
<?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

	$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'koatisss');
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

    <!DOCTYPE html>

<html>
    <head>
        <title>pruebas php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
	<table id="myTable" class="display table table-striped">
        <thead>

        <tr>
<?php
        $primeraFila = $st->fetch(PDO::FETCH_ASSOC);

	foreach ($primeraFila as $clave => $columna) {
          echo '<td>' . $clave . '</td>';
        }

?>
        </tr>
        
	<tr>

	<?php foreach ($primeraFila as $elementosPrimeraFila) {
		echo '<td>' . $elementosPrimeraFila . '</td>';
	}

	$segundaFila = $st->fetch(PDO::FETCH_ASSOC);
	
	
?>
        </thead>
        <tbody>
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
        </div>
         <script>
            $(document).ready(function(){ $('#myTable').DataTable(); });
        </script>
        
    </body>
</html>























