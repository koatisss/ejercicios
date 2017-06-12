<?php

/* array indexado

$dias=array('lunes','martes','miercoles');
	
	foreach ($dias as $clave => $dia) {
	echo $clave;
        echo $dia;
	}


   array asociativo y añadir elemento Rosy al array


$edades= array('Edgar'=> 25, 'Jorge'=> 12, 'Patro'=> 47);
	
$edades['Rosy'] = 50;

foreach ($edades as $clave => $edad) {
    echo $clave;
    echo $edad;
}

*/

//var_dump($_SERVER['SERVER_ADDR']);
?>

<form action="nuevo.php" method="get">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <input type="submit" value="enviar">
</form>


