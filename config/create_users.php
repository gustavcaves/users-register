<?php

include "../db/conexion_db.php";

// crear un script que ejecute el script de crear users

$sql = file_get_contents("../sql/create_users.sql");

echo "<br> <h1>INSER INTO users</h1>";
echo $sql;

$resultado = $conexion->multi_query($sql);
if ($resultado) {
    echo "<br>";
    echo "<br>";
    echo 'Datos para la tabla `users` creados correctamente';
} else {
    echo 'Error al crear datos para la la tabla `users`';
};

$conexion -> close();


