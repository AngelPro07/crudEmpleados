<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Empleados</title>

  <link rel="stylesheet" href="css/materialize.min.css">

  <style>
    .card{
      border-radius: 30px;
    }
  </style>
  
</head>

<?php
  $estado = $_GET['estado'] ?? '';
  $mensaje = $_GET['mensaje'] ?? '';
?>

<script>
  const estado = '<?= $estado ?>';
  const mensaje = '<?= $mensaje ?>';
</script>

<body class="teal lighten-5">


<?php   
  
  include('common/SQL.php');
  
  $SQL = new SQL();
  $query = "SELECT * from empleado WHERE 1;";
  $result = $SQL->consultar($query);
  
  if($result !== false){
    
    }
  
  
    $SQL = new SQL();
    $query = "SELECT E.*, D.id AS id_departamento, 
  D.nombre AS nombre_departamento from empleado E 
  INNER JOIN departamento D ON E.id_departamento = D.id WHERE 1;";
  $result = $SQL->consultar($query);
  

  ?>
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="crear_empleado.php">Agregar</a></li>
        <li><a href="collapsible.html">Salir</a></li>
      </ul>
    </div>
  </nav>
</div>

<?php 

include('modal/modal_eliminar.php');
?>
 
  <div class="container">

    <div class="row">
      
      
      <div class="col s12" id="data">
        
              <table class="centered">
                <thead>
                  <tr>
                    <th>NIF</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>DEPARTAMENTO</th>
                        <th>ACCIONES</th>
                      </tr>
                    </thead>
                    
                  <tbody>
                    <?php
                      foreach($result as $empleado) {
                        $id = $empleado['id'];
                        $nif = $empleado['nif'];
                        $nombre = $empleado['nombre'];
                        $apellido1 = $empleado['apellido1'];
                        $apellido2 = $empleado['apellido2'];

                        $id_departamento = $empleado['id_departamento'];
                        $nombre_departamento = $empleado['nombre_departamento'];

                        $params = $id . ",'" . $nombre. " " . $apellido1 . " " . $apellido2 . "'";
                        ?>
                      

                    <tr>
                      <td><?php echo $nif; ?></td>
                      <td><?= $nombre?></td>
                      <td><?= $apellido1?></td>
                      <td><?= $apellido2?></td>
                      <td><?=$nombre_departamento?></td>
                      <td>
                        <a href="actualizar_empleado.php?id=<?= $id ?>" class="btn teal darken-2 waves-effect">Editar</a>
                        <a href="#modal_eliminar" onclick="eliminar(<?=$params?>)" class='btn red darken-3 waves-effect modal-trigger'>Eliminar</a>

                      </td>
                    </tr>
                    
                    <?php
                      }
                    ?>

                  </tbody>
              </table>

            </div>          

        </div>

      </div>
    </div>

  </div>
  

  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
