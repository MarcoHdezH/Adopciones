<?php

$db = mysqli_connect('localhost', 'root', 'root', 'adopciones');
if (!$db) {
    echo "Error en la conexion";
    exit;
}
?>