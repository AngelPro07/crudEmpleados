<?php 
  include('common/SQL.php');

  $SQL = new SQL();
  $id = $_GET['id'] ?? 0;

  if($id > 0) {
      $query = "DELETE from empleado WHERE id = '$id';";
      $result = $SQL->consultar($query);

      if($result !== false){
            header("Location: index.php?estado=1&mensaje=Empleado eliminado");
        }else{
            header("Location: index.php?estado=0&causa=nombre1");
        }
    }

?>  