let darkmode = localStorage.getItem('modo-activado');


document.addEventListener('DOMContentLoaded', ()=> {
    eventlisteners();
    verificarModo();
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
    darkmode = localStorage.getItem('modo-activado');

    if (darkmode === '0') {
        document.body.classList.add('dark-mode');
        localStorage.setItem('modo-activado', '1');
        console.log('if');
    }   else {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('modo-activado', '0');
        console.log('else');
    }
    console.log(darkmode);
}

function verificarModo() {
    if(darkmode === '1') {
        document.body.classList.add('dark-mode');
    }
    console.log(typeof darkmode);
}