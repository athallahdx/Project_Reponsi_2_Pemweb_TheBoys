function setupObserver(className) {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            const imageElement = entry.target.querySelector('img'); 

            if (entry.isIntersecting) {
                imageElement.classList.add('visible');
                observer.unobserve(entry.target); 
            }
        });
    }, {
        threshold: 0.5
    });

    document.querySelectorAll(className).forEach(element => {
        observer.observe(element); 
    });
}

// Menjalankan observer untuk setiap container gambar
setupObserver('.image-container-1');
setupObserver('.image-container-2');
setupObserver('.image-container-3');
setupObserver('.image-container-4');
setupObserver('.image-container-5');
setupObserver('.image-container-6');
setupObserver('.image-container-7');


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


