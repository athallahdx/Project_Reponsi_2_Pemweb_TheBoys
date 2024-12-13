function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
}

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






const fileInput = document.getElementById('file-input');
const imageTrigger = document.getElementById('image-trigger');
const postButton = document.getElementById('post-button');


imageTrigger.addEventListener('click', function () {
    fileInput.click();
});

// Validasi file setelah dipilih
fileInput.addEventListener('change', function () {
    const file = fileInput.files[0];

    if (file && file.type === 'image/png') {
        postButton.disabled = false; 
        alert(`File "${file.name}" dipilih!`);
    } else {
        postButton.disabled = true; 
        alert('Hanya file PNG yang diperbolehkan!');
    }
});

postButton.addEventListener('click', function () {
    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        alert(`Mengirim file: ${file.name}`);
    }
});


function toggleComments(button) {
    var postId = button.getAttribute('data-post-id');
    
    var hiddenComments = document.querySelectorAll(`#post${postId} .comment-section[style="display: none;"]`);
    
    if (hiddenComments.length > 0) {
        hiddenComments.forEach(function(comment) {
            comment.style.display = 'block'; 
        });

        button.textContent = 'Sembunyikan';  
    } else {
        var allComments = document.querySelectorAll(`#post${postId} .comment-section`);
        
        allComments.forEach(function(comment) {
            if (comment.style.display === 'block') {
                comment.style.display = 'none';  
            }
        });

        button.textContent = 'Selengkapnya'; 
    }
}
