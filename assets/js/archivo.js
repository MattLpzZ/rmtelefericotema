
// Botones para menus de dispositivos moviles

// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function () {
    // Selecciona los elementos del menú y el botón de hamburguesa
    const nav = document.querySelector('.nav-container');
    const hamburgerButton = document.querySelector('.nav__hamburguer');
    const closeButton = document.querySelector('.nav__close');

    // Agrega un evento al botón de hamburguesa para mostrar el menú
    hamburgerButton.addEventListener('click', function () {
        nav.classList.add('active');
    });

    // Agrega un evento al botón de cierre para ocultar el menú
    closeButton.addEventListener('click', function () {
        nav.classList.remove('active');
    });
});

const listadenoticias = document.querySelector('.listadenoticias');
listadenoticias.innerHTML += listadenoticias.innerHTML;

function startMarquee() {
    const duration = (listadenoticias.scrollWidth / 100) * 10; // Ajusta la duración de la animación según el contenido
    listadenoticias.style.animation = `marquee ${duration}s linear infinite`;
}

startMarquee();

// enlaces

jQuery(document).ready(function($) {
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        var target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});
