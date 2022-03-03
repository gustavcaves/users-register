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

    echo "<table class='table'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nombre</th>";
                echo "<th>Email</th>";
                echo "<th>Pasword</th>";
                echo "<th>Estado</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

    while ($fila = $resultado->fetch_assoc()) {
        // $filas[] = $fila;
            // foreach ($fila as $key) {
            echo "<tr>";
                    echo "<td>" . $fila['user_id']; "</td>";
                    echo "<td>" . $fila['user_name']; "</td>";
                    echo "<td>" . $fila['user_email']; "</td>";
                    echo "<td>" . $fila['user_password']; "</td>";
                    echo "<td>" . $fila['user_stage']; "</td>";
                echo "</tr>";
            // };
    }

    echo "</tbody>";
    echo "</table>";
    // var_dump($filas);

    /* mostrar vista simple */
    // include "../views/user_list_vista.php";
} else {
    echo 'Error al mostrar los datos de la tabla `users`';
};

$conexion -> close();
