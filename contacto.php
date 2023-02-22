<?php 
include './includes/templates/header.php';
?>


    <main class="contenedor || seccion">
        <h1>Contacto</h1>

        <div class="contacto || contenido-centrado contenedor">
            <img src="./build/img/destacada3.webp" alt="Imagen de una casa">

            <h2>Llena el formulario de contacto</h2>

            <form class="formulario-contacto">
                <fieldset>
                    <legend>Informacion Personal</legend>

                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre">

                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" placeholder="Tu Correo Electronico">

                    <label for="telefono">Telefono:</label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Tu Teléfono">

                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" rows="10"></textarea>
                </fieldset>

                <fieldset>
                    <legend>Informacion sobre Propiedad</legend>

                    <label for="tipo-operacion">Vende o Compra</label>
                    <select name="tipo-operacion" id="tipo-operacion">
                        <option value="default" disabled selected>--Seleccione--</option>
                        <option value="venta">Venta</option>
                        <option value="compra">Compra</option>
                    </select>

                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" value="0" min="0">
                </fieldset>

                <fieldset>
                    <legend>Contacto</legend>

                    <p>Como desea ser contactado</p>
                    <label for="metodo-telefono">Telefono</label>
                    <input type="radio" name="metodo-contacto" id="metodo-telefono">

                    <label for="metodo-email">Contacto</label>
                    <input type="radio" name="metodo-contacto" id="metodo-email">

                    <p>Si elijio Telefono, elija la fecha y hora</p>
                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" id="fecha">

                    <label for="fecha">Hora:</label>
                    <input type="time" name="hora" id="hora" min="09:00" max="18:00">
                </fieldset>
                
                <input type="submit" value="Enviar" class="boton boton-verde">
            </form>
        </div>
        
    </main>

<?php include './includes/templates/footer.php';