document.addEventListener('DOMContentLoaded', ()=> {
    eventlisteners();
})


function eventlisteners() {
    const botonMenu = document.querySelector('.menu-desplegable');
    const darkBoton = document.querySelector('.dark-mode-boton');

    botonMenu.addEventListener('click', navegacionResponsive);
    darkBoton.addEventListener('click', modoOscuro);
}

function navegacionResponsive() {
    const menuDesplegable = document.querySelector('.nav-header');

    menuDesplegable.classList.toggle('mostrar');
}

function modoOscuro() {
    document.body.classList.toggle('dark-mode');
}