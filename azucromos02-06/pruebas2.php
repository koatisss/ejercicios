





				<?php

				ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);

				$db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'Admin123');
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				

				try {

				$sql = "SELECT id FROM cromo ";

				    $st = $db->prepare($sql);
				    $st->execute();
				} catch (PDOException $e) {
				    echo $e->getMessage();
				    return false;
				}



				var_dump($st->fetchAll(PDO::FETCH_COLUMN));


				?>
