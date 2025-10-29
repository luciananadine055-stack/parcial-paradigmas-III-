<?php
$conexion = mysqli_connect("localhost", "root", "", "foodexpress");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
