// JavaScript para manejar el menú hamburguesa
document.getElementById('nav-hamburguer').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('nav-links').classList.add('active');
});

document.getElementById('nav-close').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('nav-links').classList.remove('active');
});