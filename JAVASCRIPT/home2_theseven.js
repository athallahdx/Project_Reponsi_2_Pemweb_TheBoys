
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
}

// Tambahkan event listener untuk semua link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.remove('show'); // Tutup menu setelah link diklik
    });
});

function hoverMenu() {
    const hamburger = document.querySelector('.hamburger');
    hamburger.style.transform = 'rotate(0deg)';
}

function resetMenu() {
    const hamburger = document.querySelector('.hamburger');
    hamburger.style.transform = 'rotate(0deg)';
}

function setupObserver(selector) {
    const element = document.querySelector(selector);
    if (element) {
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible'); // Tambah class "visible" untuk memulai animasi
            observer.unobserve(entry.target); // Hentikan pengamatan
          }
        });
      }, {
        threshold: 0.5 // 50% elemen terlihat
      });
      observer.observe(element); // Mulai pengamatan
    }
  }
  
  // Tambahkan pengamatan untuk elemen tertentu
  setupObserver('.vought-logo-2');
  