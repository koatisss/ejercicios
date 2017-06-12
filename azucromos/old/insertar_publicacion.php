<?php

	ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

	try {
            $st = $db->prepare($sql);
            $st->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }


	$conn = new mysqli ("localhost","root","koatisss","azucromos_prueba");
	$sql = "INSERT INTO publicacion (nombre, anyo, editorial_id, categoria_publicacion_id) VALUES ('".$_POST['nombre']."','".$_POST['anyo']."','".$_POST['editorial_id']."','".$_POST['categoria_publicacion_id']."')";

	$conn->query($sql);
	$conn->close();

?>
