<?php

include "../db/datos_conexion.php";

$conexion = new mysqli($servidor,$usuario,$password,$basedatos);

if ($conexion -> connect_error) {
    echo 'Ha habido un error al conectar con la base de datos';
}