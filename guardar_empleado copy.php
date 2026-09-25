<?php

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];


$query = "INSERT INTO empleados (nombre, apellido1, apellido2) VALUES ('$nombre', '$apellido1', '$apellido2')";

if(strlen($nombre) < 1) {
    header("Location: index.php?error=1&mensaje=nombre_requerido");
}else{
    header("Location: index.php");
}


$result = $SQL->consultar($query);    

echo "Nombre: " . $nombre;
echo "<br>apellido1: " . $apellido1;
echo "<br>apellido2: " . $apellido2;
echo "<br>query: " . $query;
