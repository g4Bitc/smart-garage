const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

if (menuToggle && navLinks) {
  menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('show');
  });
}

const currentPage = window.location.pathname.split('/').pop() || 'index.html';
const navItems = document.querySelectorAll('.nav-links a');
navItems.forEach((link) => {
  const target = link.getAttribute('href');
  if (target === currentPage || (currentPage === '' && target === 'index.html')) {
    link.classList.add('active');
  }
});
