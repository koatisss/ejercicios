
<?php

	$conn = new mysqli("localhost" , "root" , "Admin123" , "colegio");

	$sql = "SELECT * FROM alumno";

	$result = $conn->query($sql);


	$primeraFila = $result->fetch_assoc();
	$nombreColumnas = array_keys($primeraFila);

	echo '<table>';


	echo '<tr>';
	foreach ($nombreColumnas as $nombreColumna) {
	echo '<td>' . $nombreColumna . '</td>';
	}
	echo '</tr>';

	echo '<tr>';
	foreach ($primeraFila as $elementosPrimeraFila) {
	echo '<td>' . $elementosPrimeraFila . '</td>';
	}
	echo '</tr>';

	
	/*while ($fila=$result->fetch_assoc()){
		var_dump($fila);
	}*/

	
	while ($fila=$result->fetch_assoc()){
	//var_dump($fila);
		echo '<tr>';
		echo '<td>' . $fila['id'] . '</td>'; 
		echo '<td>' . $fila['nombre'] . '</td>';
		echo '<td>' . $fila['apellidos'] . '</td>'; 
		echo '<td>' . $fila['fecha_nacimiento'] . '</td>';
		echo '</tr>';
	}
	echo '</table>';

	//var_dump($primeraFila);

	$conn->close();

	


?>
