    <?php

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'Admin123');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO equipo (nombre) VALUES ( ? )";

            try {
                $st = $db->prepare($sql);
                $st->execute(array($_POST['nombre']));
            } catch (PDOException $e) {
                http_response_code(500);
                echo $e->getMessage();
                return false;
            }


    ?>
