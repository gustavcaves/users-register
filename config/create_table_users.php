<?php

include '../db/conexion_db.php';

// crear un script que ejecute el script de crear tabla users

$sql = file_get_contents("../sql/create_table_users.sql");

echo "<br> <h1>CREATE TABLE users</h1>";
echo $sql;

$resultado = $conexion->multi_query($sql);
if ($resultado) {
    echo "<br>";
    echo "<br>";
    echo 'Tabla `user` creada correctamente';
} else {
    echo 'Error al crear la tabla `user`';
};



