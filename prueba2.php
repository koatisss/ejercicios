
<form action="prueba3.php" method="post">
<label>Provincias</label>




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


	$conn = new mysqli("localhost" , "root" , "Admin123" , "colegio");

	$sql = "SELECT * FROM provincia";

	$result = $conn->query($sql);

	echo '<select name="provincia">';
	
	while ($fila = $result -> fetch_assoc()) {

	echo $fila['nombre'];
	echo '<option value="'.$fila['id'].'">' . $fila['nombre'] . '</option>';

//echo '<option value="'.$fila['id'].'">Guadalajara</option>'

}

	echo '</select>';

	$conn->close();



	echo "segundo cambio de archivos con git"
	


?>

<input type="submit" value="enviar">
</form>
























