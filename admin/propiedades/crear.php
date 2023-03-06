<?php
    require '../../includes/funciones.php';
    autenticarSesion($private = true);

    // Trae la pagina con la funcion para conectarse a la base de datos
    require "../../includes/config/database.php";
    $db = conectarDB();

    //Obtener datos de una base
    $qVendedores = "SELECT * FROM vendedores;";
    $res_vendedores = mysqli_query($db, $qVendedores); // Realiza la peticion a la base de datos

    // Array con Mensajes de errores
    $errores = [];

    // Crea la variables de forma global para poder usarlas despues
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedor = '';
    $fecha = date('Y-m-d');
    



    // Ejecuta el codigo despues de que el cliente envia el formulario
    if($_SERVER["REQUEST_METHOD"] === 'POST') {

        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';

        // Muestra los archivos que fueron mandados en un formulario
        // echo '<pre>';
        // var_dump($_FILES["imagen"]);
        // echo '</pre>';

        // Guarda los datos obtenidos del formulario con el metodo post
        $titulo = mysqli_real_escape_string( $db, $_POST["titulo"]);
        $precio = mysqli_real_escape_string( $db, $_POST["precio"]);
        $descripcion = mysqli_real_escape_string( $db, $_POST["descripcion"]);
        $habitaciones = mysqli_real_escape_string( $db, $_POST["habitaciones"]);
        $wc = mysqli_real_escape_string( $db, $_POST["wc"]);
        $estacionamiento = mysqli_real_escape_string( $db, $_POST["estacionamiento"]);
        $vendedor = mysqli_real_escape_string( $db, $_POST["vendedor"]);
        
        // Asignar una imagen subida con un formulario a una variable
        $imagen = $_FILES["imagen"];
        
        // echo '<pre>';
        // var_dump($imagen);
        // echo '</pre>';

        // Valida que cada input este llenado correctamente
        if(!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }
        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }
        if(strlen($descripcion) < 50 ) {
            $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }
        if(!$habitaciones) {
            $errores[] = "El núemero de habitaciones es obligatorio";
        }
        if(!$wc) {
            $errores[] = "El número de baños es obligatorio";
        }
        if(!$estacionamiento) {
            $errores[] = "El numero de estacionamientos es obligatorio";
        }
        if(!$vendedor) {
            $errores[] = "Debes elegir al vendedor";
        }
        if(!$imagen["name"]) {
            $errores[] = "La imagen es obligatoria";
        }
        
        // Valida que no haya errores antes de enviar la peticion a la base de datos
        if(empty($errores)){

            //* SUBIDA DE ARCHIVOS
            //Crear una carpeta
            $carpetaImagenes = '../../imagenes';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
                
            }

            // Generar nombre unico a las imagenes
            $extensionImagen = pathinfo($imagen["name"], PATHINFO_EXTENSION);
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".{$extensionImagen}";
            
            // Subir la imagen al servidor
            move_uploaded_file($imagen["tmp_name"], "$carpetaImagenes/$nombreImagen");
            
            // Query para insertar los datos en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('{$titulo}', '{$precio}', '{$nombreImagen}', '{$descripcion}', '{$habitaciones}', '{$wc}', '{$estacionamiento}', '{$fecha}', '{$vendedor}');";
            // Realiza la peticion a la base de datos
            $resultado = mysqli_query($db, $query);
        }   
        
        if($resultado) {
            header('Location: /admin?resultado=1');
        }
    }    

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin/" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error) { ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>

        <?php } ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" 
                id="titulo" 
                name="titulo" 
                placeholder="Titulo Propiedad" 
                value="<?php echo $titulo; ?>">

                <label for="precio">Precio</label>
                <input type="number" 
                id="precio" 
                name="precio" 
                placeholder="Precio Propiedad" 
                value="<?php echo $precio; ?>">

                <label for="imagen">Imagen</label>
                <input type="file" 
                id="imagen" 
                name="imagen"
                accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea 
                id="descripcion" 
                name="descripcion" 
                rows="10"><?php echo $descripcion; ?></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">habitaciones</label>
                <input type="number" 
                name="habitaciones" 
                id="habitaciones" 
                placeholder="Ej: 3" 
                value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños</label>
                <input type="number" 
                name="wc" id="wc" 
                placeholder="Ej: 2" 
                value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" 
                name="estacionamiento" 
                id="estacionamiento" 
                placeholder="Ej: 2" 
                value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option disabled selected>--Seleccionar--</option>
                    <?php while($row = mysqli_fetch_assoc($res_vendedores)) { //Obtiene a los vendores que se encuentran en la base de datos ?>
                        <option <?php echo $row["id"] === $vendedor ? 'selected' : ''; ?>  value="<?php echo $row["id"]?>"> <?php echo "{$row["nombre"]} {$row["apellido"]}"; ?> </option>
                    <?php } ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer')
?>