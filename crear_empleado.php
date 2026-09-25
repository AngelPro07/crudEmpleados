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



?>

  <div class="container">

    <div class="row">
      <div class="col s12 m8 offset-m2">

        <div class="card">

          <div class="card-content">

            <span class="card-title center-align"> ALTA EMPLEADO </span>

            <form id="formEmpleado" method="post" action="guardar_empleado.php">

              <div class="input-field">
                <i class="material-icons prefix">badge</i>
                <input type="text" id="nif" name="nif" required>
                <label for="nif">NIF</label>

              </div>


              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">

              </div>


              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" id="apellido1" name="apellido1">
                <label for="apellido1">Apellido 1</label>

              </div>


              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" id="apellido2" name="apellido2">
                <label for="apellido2">Apellido 2</label>
              </div>
  

              <div class="input-field">
                <i class="material-icons prefix">business</i>
                <select name="id_departamento">
                  <option value="" disabled selected>Selecciona un departamento</option>
                  <option value="1">Desarrollo</option>
                  <option value="2">Sistemas</option>
                  <option value="3">Recursos Humanos</option>
                  <option value="4">Contabilidad</option>
                  <option value="5">Proyectos</option>
                  <option value="6">Publicidad</option>
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
  <script src="js/crear_empleado.js"></script>
</body>
</html>
