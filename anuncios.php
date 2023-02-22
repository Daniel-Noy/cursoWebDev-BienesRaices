<?php 
require './includes/funciones.php';

incluirTemplate('header');
?>

    <main class="anuncios || contenedor seccion">
        <h1>Casas y Depas en Venta</h1>

        <div class="anuncios-contenedor">
            <div class="anuncio">
                <figure>
                    <img src="./build/img/anuncio1.webp" alt="Imagen casa lago" loading="lazy">
                </figure>
                <div class="anuncio-informacion">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p class="descripcion">Casa en el lago con excelente vista, acabados de lujo a un exelente precio.</p>
                    <p class="costo">$3,000,000</p>

                    <div class="habitaciones">
                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_dormitorio.svg" alt="Icono dormitorio">
                            <p>4</p>
                        </div> <!--habitacion-->

                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </div> <!--habitacion-->

                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_wc.svg" alt="Icono baño">
                            <p>3</p>
                        </div> <!--habitacion-->
                    </div>  <!--habitaciones-->

                    <a href="" class="ver-anuncio || boton boton-anuncio">Ver propiedad</a>
                </div> <!--informacion-->
            </div> <!--anuncio-->

            <div class="anuncio">
                <figure>
                    <img src="./build/img/anuncio2.webp" alt="Imagen casa de lujo" loading="lazy">
                </figure>
                <div class="anuncio-informacion">
                    <h3>Casa Terminados de Lujo</h3>
                    <p class="descripcion">Casa con diseño moderno, asi como tecnología inteligente y amueblada</p>
                    <p class="costo">$2,000,000</p>
                    <div class="habitaciones">
                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_dormitorio.svg" alt="Icono dormitorio">
                            <p>4</p>
                        </div> <!--habitacion-->

                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </div> <!--habitacion-->

                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_wc.svg" alt="Icono baño">
                            <p>3</p>
                        </div> <!--habitacion-->
                    </div>  <!--habitaciones-->

                    <a href="" class="ver-anuncio || boton boton-anuncio">Ver propiedad</a>
                </div> <!--informacion-->
            </div> <!--anuncio-->

            <div class="anuncio">
                <figure>
                    <img src="./build/img/anuncio3.webp" alt="Imagen casa con alberca" loading="lazy">
                </figure>
                <div class="anuncio-informacion">
                    <h3>Casa con alberca</h3>
                    <p class="descripcion">Casa con alberca y acabados de Lujo en la ciudad, exelente oportunidad</p>
                    <p class="costo">$3,000,000</p>
                    <div class="habitaciones">
                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_dormitorio.svg" alt="Icono dormitorio">
                            <p>4</p>
                        </div> <!--habitacion-->

                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </div> <!--habitacion-->

                        <div class="habitacion">
                            <img src="./build/img/iconos/icono_wc.svg" alt="Icono baño">
                            <p>3</p>
                        </div> <!--habitacion-->
                    </div>  <!--habitaciones-->

                    <a href="" class="ver-anuncio || boton boton-anuncio">Ver propiedad</a>
                </div> <!--informacion-->
            </div> <!--anuncio-->
        </div>

        <p>Poner más anuncios</p>
        
    </main>

    <?php  incluirTemplate('footer')?>