<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mostrar Publicacion</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet"> 
    <link rel="stylesheet" href="mis_estilos.css">
  </head>
  <body>
     <div class= "jumbotron jumbotron-fluid" > 
         <div class= "container" > 
             <a href="index.html"><h1 class= "display-3 logo" > AZUCROMOS</h1></a>
             <p class= "lead texto_mio" > Mostrar Publicación </p> 
         </div> 
     </div> 
      
     <div class="container">
      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Equipo
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="mostrar_equipo.php" target="_self">Mostrar Equipo</a>   
                <a class="dropdown-item" href="#">Insertar Equipo</a>
                <a class="dropdown-item" href="#">Editar Equipo</a>
              </div>
            </div>  <!-- final de class="btn-group" -->
         </div>  <!-- final de class="col-md-2" -->
         <div class="col-md-2">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Editorial
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="mostrar_editorial.php">Mostrar Editorial</a>
                <a class="dropdown-item" href="#">Insertar Editorial</a>
                <a class="dropdown-item" href="#">Editorial</a>
              </div>
            </div>  <!-- final de class="btn-group" -->
         </div>  <!-- final de class="col-md-2" -->
         <div class="col-md-2">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Publicacion
              </button>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="mostrar_publicacion.php">Mostrar Publicacion</a>
                <a class="dropdown-item" href="#">Insertar Publicacion</a>
                <a class="dropdown-item" href="#">Editar Publicacion</a>
              </div>
            </div>  <!-- final de class="btn-group" -->
         </div>  <!-- final de class="col-md-2" -->
         <div class="col-md-2">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cat. Publicacion
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="mostrar_cat_publi.php">Mostrar Cat. Publicacion</a>
                <a class="dropdown-item" href="#">Insertar Cat. Publicacion</a>
                <a class="dropdown-item" href="#">Editar Cat. Publicacion</a>
              </div>
            </div>  <!-- final de class="btn-group" -->
         </div>  <!-- final de class="col-md-2" -->
         <div class="col-md-2">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cromo
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="mostrar_cromo.php">Mostrar cromo</a>
                <a class="dropdown-item" href="#">Insertar cromo</a>
                <a class="dropdown-item" href="#">Editar cromo</a>
              </div>
            </div>  <!-- final de class="btn-group" -->
         </div>  <!-- final de class="col-md-2" -->
      </div>  <!-- final de class="row" -->
     </div> <!-- final de container -->
     
     <div class="container_mio">
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
         
         <table id="myTable" class="display">
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
                </div>
                        <script>
                    $(document).ready(function(){ $('#myTable').DataTable(); });
                        </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
  </body>
</html>
