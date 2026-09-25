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

<body class="teal lighten-5">

<?php 
  $error = $_GET['error'] ?? '';
  $mensaje = $_GET['mensaje'] ?? '';

  if($error == 1){
    echo $error . " - " . $mensaje;
  }


  include('common/SQL.php');

  $SQL = new SQL();
  $id = $_GET['id'] ?? 0;

  if($id > 0) {
      $query = "SELECT * from empleado WHERE id = '$id';";
      $result = $SQL->consultar($query);
      $empleado = $result[0];

      $nif = $empleado['nif'];
      $nombre = $empleado['nombre'];
      $apellido1 = $empleado['apellido1'];
      $apellido2 = $empleado['apellido2'];
      $id_departamento = $empleado['id_departamento'];
?>

  <div class="container">

    <div class="row">
      <div class="col s12 m8 offset-m2">

        <div class="card">

          <div class="card-content">

            <span class="card-title center-align">Actualizar EMPLEADO </span>

            <form id="formEmpleado" method="post" action="update_empleado.php">

              <input type="hidden" name="id" value="<?= $id ?>" />

              <div class="input-field">
                <i class="material-icons prefix">badge</i>
                <input type="text" id="nif" name="nif" value="<?= $nif ?>" disabled>
                <label for="nif">NIF</label>

              </div>


              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>">

              </div>


              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" id="apellido1" name="apellido1" value="<?= $apellido1 ?>">
                <label for="apellido1">Apellido 1</label>

              </div>


              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" id="apellido2" name="apellido2" value="<?= $apellido2 ?>">
                <label for="apellido2">Apellido 2</label>
              </div>


              <div class="input-field">
                <i class="material-icons prefix">business</i>
                <select name="id_departamento">
                  <option value="" disabled selected>Selecciona un departamento</option>
                  <option value="1" <?php if($id_departamento == '1') echo 'selected' ?>>Desarrollo</option>
                  <option value="2" <?php if($id_departamento == '2') echo 'selected' ?>>Sistemas</option>
                  <option value="3" <?php if($id_departamento == '3') echo 'selected' ?>>Recursos Humanos</option>
                  <option value="4" <?php if($id_departamento == '4') echo 'selected' ?>>Contabilidad</option>
                  <option value="5" <?php if($id_departamento == '5') echo 'selected' ?>>Proyectos</option>
                  <option value="6" <?php if($id_departamento == '6') echo 'selected' ?>>Publicidad</option>
                </select>
                <label>Departamento</label>
              </div>


              <div class="center-align">
                <button class="waves-effect waves-light btn">Guardar</button>
              </div>

            </form>

          </div>

                  

        </div>

      </div>
    </div>

  </div>

  

  <script src="js/materialize.min.js"></script>
  <script src="js/actualizar_empleado.js"></script>

    <?php }else{
      echo 'Sin datos';
    } ?>
</body>
</html>
