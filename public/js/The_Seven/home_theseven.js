function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
}


document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.remove('show'); 
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
    const increment = Math.ceil(targetValue / (duration / 50)); 
    const interval = setInterval(() => {
        startValue += increment;
        if (startValue >= targetValue) {
            startValue = targetValue;
            clearInterval(interval); 
        }
        element.textContent = startValue; 
    }, 50); 
    }

function formatNumberWithCommas(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function animateCounter(element, targetValue, duration, suffix = "") {
    let startValue = 0;
    const increment = Math.ceil(targetValue / (duration / 50)); 
    const interval = setInterval(() => {
        startValue += increment;
        if (startValue >= targetValue) {
            startValue = targetValue;
            clearInterval(interval); 
        }
        element.textContent = `${formatNumberWithCommas(startValue)}${suffix}`; 
    }, 50); 
    }

// Fungsi observer untuk animasi angka saat elemen terlihat
function setupObserver(selector) {
    const element = document.querySelector(selector);
    if (element) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible'); 
                    observer.unobserve(entry.target); 
                    const counterElement = entry.target.querySelector("span[data-target]");
                    if (counterElement) {
                        const targetValue = parseInt(counterElement.getAttribute("data-target"));
                        const suffix = counterElement.getAttribute("data-suffix") || ""; 
                        animateCounter(counterElement, targetValue, 10000, suffix); 
                    }
                }
            });
        }, {
            threshold: 0.5 
        });
        observer.observe(element); 
    }
    }


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
setupObserver('.circle-1');
setupObserver('.circle-2'); 
setupObserver('.circle-3'); 
setupObserver('.seven-image');
setupObserver('.anggota-image');
setupObserver('.seven-text-end h1');
setupObserver('.invitation-card-4');





// // Button Enroll
// const enrollButton = document.querySelector('.enroll-button-4');

// // Tambahkan event listener pada tombol
// enrollButton.addEventListener('click', function () {
//     // Arahkan ke halaman login2_theseven.html
//     window.location.href = 'login2_theseven.html';
// });
