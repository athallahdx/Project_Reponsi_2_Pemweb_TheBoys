const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');
console.log(assetsImg);

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




document.getElementById("post-button").addEventListener("click", function () {
    const postInput = document.getElementById("post-input");
    const postsContainer = document.getElementById("posts-container");

    // Ambil teks dari input
    const postText = postInput.value.trim();
    if (postText === "") return; // Jangan posting jika kosong

    // Buat elemen waktu sekarang
    const currentTime = new Date();
    const timeString = `Just now`;

    // Buat elemen postingan baru
    const newPost = document.createElement("div");
    newPost.classList.add("post");
    newPost.innerHTML = `
        <img src="{${assetsImg}The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
        <div class="post-content"> 
            <span class="username">Your Name</span>
            <span class="post-time">${timeString}</span></br></br>
            <p>${postText}</p>
        </div>
    `;

    // Tambahkan postingan baru ke container
    postsContainer.prepend(newPost);

    // Kosongkan input
    postInput.value = "";
});
