<?php
include('common/SQL.php');

$SQL = new SQL();

$id = $_POST['id'];
$nif = $_POST['nif']??'';
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2']; 
$id_departamento = $_POST['id_departamento'];

$query = "UPDATE empleado SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', id_departamento='$id_departamento' WHERE id ='$id'";
$result = $SQL->consultar($query);

//echo $query;

//return;
if($result !== false){
  header("Location: index.php?estado=1&mensaje=Empleado guardado");
}else{
  header("Location: actualizar_empleado.php?estado=0&causa=nombre1");
}