<?php

include "../db/conexion_db.php";

// ejecutar script de user list que almacene los resultados en una variable llamada $filas y a su vez reclame la vista user_list_vista.php

$sql = file_get_contents("../sql/users_list.sql");

$resultado = $conexion->query($sql);

if ($resultado) {
    echo "<br>";
    echo "<br>";
    echo '<h1>Mostrando Datos de la tabla `users` correctamente</h1>';

    /* obtener un array asociativo y luego multidimencional */
    while ($fila = $resultado->fetch_assoc()) {
        $filas[] = $fila;

    }
    // var_dump($filas);

    /* mostrar vista simple */
    include "../views/user_list_vista.php";
    
} else {
    echo 'Error al mostrar los datos de la tabla `users`';
};

$conexion -> close();
