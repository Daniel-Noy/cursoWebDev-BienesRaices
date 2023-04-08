<?php
// Funcion para importar la conexion a la base de datos a cualquier archivos
function conectarDB() : mysqli {
    $db = mysqli_connect('containers-us-west-167.railway.app', 'root', '7irWKR49Pw6IEisSjBmA', 'railway');

    if(!$db) {
        echo "Error, no se pudo conectar a la base de datos";
        exit;
    }

    return $db;
}