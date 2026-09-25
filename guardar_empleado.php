<?php
include('common/SQL.php');

$SQL = new SQL();

$nif = $_POST['nif'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2']; 
$id_departamento = $_POST['id_departamento'];

$query = "INSERT INTO empleado (nif, nombre, apellido1, apellido2, id_departamento) VALUES ('$nif', '$nombre', '$apellido1', '$apellido2', '$id_departamento')";
$result = $SQL->consultar($query);

//echo $query;

//return;
if($result !== false){
  header("Location: index.php?estado=1&mensaje=Empleado guardado");
}else{
  header("Location: crear_empleado.php?estado=0&causa=nombre1");
}