<?php 
require './includes/funciones.php';

incluirTemplate('header');
?>

    <main class="propiedad || seccion">
        <h1>Casa en venta frente al bosque</h1>
        
        <div class="propiedad-contenedor || contenedor contenido-centrado">
            <img src="./build/img/destacada.webp" alt="Imagen de una casa en la noche">
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
            <div class="anuncio-informacion">
                <p> Quisque nec tincidunt tortor, eget tempus ante. Nullam commodo, elit at tincidunt mollis, massa turpis convallis turpis, vitae auctor velit mauris non est. Praesent quam sapien, rhoncus vel orci vel, ornare semper magna. Vestibulum tristique dignissim ex, ut ornare libero malesuada sit amet. Vivamus fermentum fermentum condimentum. Donec pretium scelerisque orci, vel luctus diam accumsan ac. Nullam congue nisi sapien, non eleifend massa cursus sed. Suspendisse potenti. Nunc vestibulum tellus fringilla, efficitur felis eget, congue massa. Integer imperdiet tincidunt feugiat. Aenean pellentesque nisl massa, eu sagittis ipsum pellentesque ut. Aliquam nec tristique velit. Etiam pharetra interdum neque, quis ornare mauris hendrerit ac. Quisque nec velit pulvinar, vehicula sem in, pretium dolor. Etiam sed tellus ligula.</p>

                <p>Cras vel enim leo. Curabitur id odio vel augue faucibus placerat sed ut diam. Pellentesque quis risus eu orci hendrerit dapibus. Etiam quis enim lacus. Donec ac sem commodo, dignissim nunc sed, imperdiet lacus. Nam venenatis velit quis turpis volutpat lacinia. Vivamus ac nunc tristique, sodales ex ac, posuere ipsum. Donec vel turpis mi. Vivamus odio ex, auctor at sapien ut, placerat tempus lacus. Phasellus hendrerit porta fermentum. Integer ultricies augue et felis maximus commodo. Phasellus tincidunt orci dolor, auctor ullamcorper arcu lobortis ut. Suspendisse dictum elementum nisi, quis ornare nisi aliquet eget. </p>
            </div>
        </div>
    </main>
    
    <?php  incluirTemplate('footer')?>