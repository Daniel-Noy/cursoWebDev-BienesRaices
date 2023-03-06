<?php 
    require './includes/config/database.php';
    $db = conectarDB();

// Autenticar y validar usuario
    $errores = [];

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
        $password= mysqli_real_escape_string($db, $_POST["password"]);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es valido";
        }
        if(!$password) {
            $errores[] = "La contraseña debe ser mas grande";
        }

        if(empty($errores)) {
            // Revisar si el usuario existe
            $qUsuario = "SELECT * FROM usuarios WHERE email = '{$email}';";
            $resUsuario = mysqli_query($db, $qUsuario);

            if($resUsuario->num_rows) {
                $usuario = mysqli_fetch_assoc($resUsuario);

                // Revisar si un password hasheado es correcto
                $auth = password_verify($password, $usuario["password"]);

                if($auth) {
                    // El usuario esta autenticado
                    session_start();

                    $_SESSION["usuario"] = $usuario["email"];
                    $_SESSION["login"] = true;

                    header("Location: /admin");
                } else {
                    $errores[] = "La contraseña es incorrecta";
                }

                
            } else {
                $errores[] = "El usuario no existe";
            }

        }
    }

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error) {?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php } ?>
        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email"  placeholder="Tu E-mail" required>
                
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password"  placeholder="Tu Contraseña" required>
            </fieldset>

            <input type="submit" value="Iniciar sesion" class="boton-verde">
        </form>
    </main>