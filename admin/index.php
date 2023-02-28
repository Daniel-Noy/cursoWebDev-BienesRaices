<?php
    require '../includes/funciones.php';

    $resultado = $_GET["resultado"] ?? null;

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>

        <?php if($resultado === "1") { ?>
            <p class="alerta exito">Propiedad publicada correctamente</p>
        <?php } ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
    </main>

<?php
    incluirTemplate('footer')
?>