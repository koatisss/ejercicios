
<?php


	/*$dias=array("lunes","martes","miercoles");
	$dias[]= "jueves";
	

	foreach ($dias as $clave => $dia) {
	echo $clave.' '.$dia.'<br>';
	}*/


	
	/*$edades= array('Juan'=> 34, 'Maria'=> 28);
	$edades['Elena']= 90;
	$edades['Felix']= 25;
	$edades['Jorge']= 12;


	var_dump($edades['Elena']);*/



	/*echo "foobar";
	var_dump ($_POST['nombre']);

        var_dump($_POST);  */


	$conn = new mysqli("localhost" , "root" , "koatisss" , "azucromos_prueba");

	$result = $conn->query("SELECT * FROM editorial");

	echo '<table>'

	$primeraFila = $result->fetch_assoc();
	$nombreColumnas = array_keys($primeraFila);
	
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

	while ($fila=$result->fetch_assoc()) {

	echo '<tr>';
	echo '<td>' . $fila['id'] . '</td>';
	echo '<td>' . $fila['descripcion'] . '</td>'
	echo '</tr>';
	}

	echo '</table>';
	
	$conn->close();

?>























