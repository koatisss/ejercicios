<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    
    <title>Mostrar Equipo db Azucromos</title>
    <!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="mis_estilos.css">
    
  </head>
    
    
  <body>
     <div class= "jumbotron jumbotron-fluid" > 
         <div class= "container" > 
             <a href="index.html"><h1 class= "display-3 logo" > AZUCROMOS</h1></a>
             <p class= "lead texto_mio" > Mostrar Equipo </p> 
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
                <a class="dropdown-item" href="mostrar_equipo.php">Mostrar Equipo</a>
                <a class="dropdown-item" href="insertar_equipo.php">Insertar Equipo</a>
                <a class="dropdown-item" href="editar_equipo.php">Editar Equipo</a>
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

                $db = new PDO('mysql:host=localhost;dbname=azucromos_prueba;charset=utf8', 'root', 'Admin123');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql= 'SELECT * FROM equipo';

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
                        echo '</tr>';
                }

        ?>
                </tbody>
                </table>
                </div>
     
     <script>
                    $(document).ready(function(){ $('#myTable').DataTable(); });
                        </script>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
                        
    


  </body>
</html>
