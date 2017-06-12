<?php

	$conn = new mysqli ("localhost","root","koatisss","azucromos_prueba");
	$sql = "INSERT INTO equipo (nombre) VALUES ('".$_POST['nombre']."')";

	$conn->query($sql);
	$conn->close();

?>
