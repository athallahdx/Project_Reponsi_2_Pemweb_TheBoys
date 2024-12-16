const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');

// Set the background image
bodyElement.style.backgroundImage = `url('${assetsImg}The_Boys/home_background.png')`;

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

const fileInput = document.getElementById('file-input');
const imageTrigger = document.getElementById('image-trigger');

imageTrigger.addEventListener('click', function () {
    fileInput.click();
});