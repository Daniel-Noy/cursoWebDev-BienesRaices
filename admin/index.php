<?php

    require '../includes/config/database.php';
    $db = conectarDB();
    $query = "SELECT id, titulo, precio, imagen FROM propiedades";

    $consulta = mysqli_query($db, $query); 


    $resultado = $_GET["resultado"] ?? null;

    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>

        <?php if($resultado === "1") { ?>
            <p class="alerta exito">Propiedad publicada correctamente</p>
        <?php } ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>    
                    <td>ID</td>
                    <td>Titulo</td>
                    <td>Imagen</td>
                    <td>Precio</td>
                    <td>Acciones</td>
                </tr>
            </thead>

            <tbody>
                <?php while( $propiedad = mysqli_fetch_assoc($consulta)) { ?>
                <tr>
                    <td><?php echo $propiedad["id"] ?></td>
                    <td><?php echo $propiedad["titulo"] ?></td>
                    <td><img class="imagen-tabla" <?php echo "src=../imagenes/{$propiedad["imagen"]}" ?> alt="Imagen propiedad"></td>
                    <td>$<?php echo $propiedad["precio"] ?></td>
                    <td>
                        <a class="boton-rojo-block" href="">Eliminar</a>
                        <a class="boton-amarillo-block" href="">Actualizar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

<?php
    incluirTemplate('footer')
?>