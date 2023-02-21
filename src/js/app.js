document.addEventListener('DOMContentLoaded', ()=> {
    eventlisteners();
})


function eventlisteners() {
    const botonMenu = document.querySelector('.menu-desplegable');
    const menuDesplegable = document.querySelector('.nav-header');

    botonMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    console.log('nav');
}