<?php 

require 'app.php';

function incluirTemplate(string $nombre, $inicio = false) {
    include TEMPLATES_URL . "/{$nombre}.php";
}

// Control de la sesion del usuario
function autenticarSesion($private = false) {
    if(!$_SESSION) {
        session_start();
    }

    $auth = $_SESSION["login"];

    if($private) {
        if(!$auth) {
            header("Location: /");
            return;
        }
    }

    if($auth) {
        return true;
    }

    return false;

}