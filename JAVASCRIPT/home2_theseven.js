
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

// Fungsi untuk animasi angka
function animateCounter(element, targetValue, duration) {
  let startValue = 0;
  const increment = Math.ceil(targetValue / (duration / 50)); // Menghitung setiap kenaikan angka
  const interval = setInterval(() => {
      startValue += increment;
      if (startValue >= targetValue) {
          startValue = targetValue;
          clearInterval(interval); // Hentikan interval
      }
      element.textContent = startValue; // Perbarui nilai angka
  }, 50); // Jalankan setiap 50ms
}

// Fungsi observer yang sudah ada
// Fungsi untuk memformat angka dengan koma sebagai pemisah ribuan
function formatNumberWithCommas(number) {
  return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Fungsi animasi angka dengan dukungan format tambahan (seperti %)
function animateCounter(element, targetValue, duration, suffix = "") {
  let startValue = 0;
  const increment = Math.ceil(targetValue / (duration / 50)); // Menghitung kenaikan angka
  const interval = setInterval(() => {
      startValue += increment;
      if (startValue >= targetValue) {
          startValue = targetValue;
          clearInterval(interval); // Hentikan interval
      }
      element.textContent = `${formatNumberWithCommas(startValue)}${suffix}`; // Format angka dan tambahkan suffix
  }, 50); // Jalankan setiap 50ms
}

// Fungsi observer untuk animasi angka saat elemen terlihat
function setupObserver(selector) {
  const element = document.querySelector(selector);
  if (element) {
      const observer = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  entry.target.classList.add('visible'); // Tambah class "visible" untuk memulai animasi
                  observer.unobserve(entry.target); // Hentikan pengamatan
                  // Jalankan animasi angka jika elemen memiliki data-target
                  const counterElement = entry.target.querySelector("span[data-target]");
                  if (counterElement) {
                      const targetValue = parseInt(counterElement.getAttribute("data-target"));
                      const suffix = counterElement.getAttribute("data-suffix") || ""; // Ambil suffix jika ada
                      animateCounter(counterElement, targetValue, 10000, suffix); // Tambahkan suffix ke fungsi animasi
                  }
              }
          });
      }, {
          threshold: 0.5 // 50% elemen terlihat
      });
      observer.observe(element); // Mulai pengamatan
  }
}

// Tambahkan pengamatan untuk elemen tertentu
setupObserver('.circle-1');
setupObserver('.circle-2');
setupObserver('.circle-3');


// Tambahkan pengamatan untuk elemen tertentu
setupObserver('.vought-logo-2');
setupObserver('.family-image-2');
setupObserver('.content-text-2 h1');
setupObserver('.content-text-2 p');
setupObserver('.info-item-2');
setupObserver('.info-item-4');
setupObserver('.info-item-1');
setupObserver('.info-item-3');
setupObserver('.circle-1'); // Tambahkan observer untuk lingkaran 1
setupObserver('.circle-2'); // Tambahkan observer untuk lingkaran 2
setupObserver('.circle-3'); // Tambahkan observer untuk lingkaran 3
setupObserver('.seven-image');
setupObserver('.anggota-image');
setupObserver('.seven-text-end h1');


