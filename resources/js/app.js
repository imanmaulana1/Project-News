require('./bootstrap');

const navbar = document.getElementById('navbar');
const hamburgerBtn = document.getElementById('btn-hamburger');

function toggleNavbar() {
  navbar.classList.toggle('active');
}

if (hamburgerBtn) {
  hamburgerBtn.addEventListener('click', toggleNavbar);
}
