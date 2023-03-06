<?php 
    session_start();
    $auth = $_SESSION["login"] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../../build/img/iconos/icons8-bienes-raíces-32.png" type="image/png">
    <link rel="stylesheet" href="/build/css/app.css">

    <title>Bienes Raices</title>
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio': ''; ?>">
        <div class="header-contenido || contenedor">
            <div class="barra">
                <a href="/" class="header-logotipo">
                    <img src="/build/img/iconos/logo.svg" alt="Logo bienes raices">
                </a>

                <img class="menu-desplegable" src="/build/img/iconos/barras.svg" alt="Menu desplegable">
                
                <nav class="navegacion nav-header <?php echo $inicio ? 'no-background' : '' ?>">
                    <img class="dark-mode-boton" src="/build/img/iconos/dark-mode.svg" alt="Modo oscuro">
                    <a href="/nosotros.php">Nosotros</a>
                    <a href="/anuncios.php">Anuncios</a>
                    <a href="/blog.php">Blog</a>
                    <a href="/contacto.php">Contacto</a>
                    <?php if($auth) { ?>
                        <a href="/cerrar-sesion.php">Cerrar Sesion</a>
                    <?php } ?>
                </nav>
            </div> <!--barra-->

            <?php if($inicio) {?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>