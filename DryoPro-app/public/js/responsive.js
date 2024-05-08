const menuToggle = document.querySelector('.MenuToggle');
const menu = document.querySelector('.menu');

menuToggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});