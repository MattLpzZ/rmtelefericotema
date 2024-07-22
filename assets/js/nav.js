document.addEventListener('DOMContentLoaded', function() {
    const navHamburguer = document.getElementById('nav-hamburguer');
    const navClose = document.getElementById('nav-close');
    const navContainer = document.getElementById('nav-container');

    // Función para abrir el menú
    function openNav() {
        navContainer.style.transform = 'translateX(0)';
        navHamburguer.style.transform = 'scale(0)';
        navClose.style.transform = 'scale(1)';
    }

    // Función para cerrar el menú
    function closeNav() {
        navContainer.style.transform = 'translateX(-100%)';
        navHamburguer.style.transform = 'scale(1)';
        navClose.style.transform = 'scale(0)';
    }

    // Agregar event listeners
    navHamburguer.addEventListener('click', openNav);
    navClose.addEventListener('click', closeNav);