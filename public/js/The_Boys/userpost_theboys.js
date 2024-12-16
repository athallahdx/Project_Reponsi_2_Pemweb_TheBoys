const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');

// Set the background image for the body
bodyElement.style.backgroundImage = `url('${assetsImg}The_Boys/home_background.png')`;
bodyElement.style.backgroundSize = 'cover';
bodyElement.style.backgroundRepeat = 'no-repeat';
bodyElement.style.backgroundPosition = 'center';

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

// Membuat kotak dialog untuk hapus
function showDeleteDialog(post) {
    const dialog = document.createElement('div');
    dialog.className = 'dialog-overlay';
    dialog.innerHTML = `
        <div class="dialog-box">
            <h3>Konfirmasi Hapus</h3>
            <p>Apakah Anda yakin ingin menghapus postingan ini?</p>
            <div class="dialog-actions">
                <button class="btn btn-cancel">Batal</button>
                <button class="btn btn-delete">Hapus</button>
            </div>
        </div>
    `;

    document.body.appendChild(dialog);

    dialog.querySelector('.btn-cancel').addEventListener('click', () => {
        document.body.removeChild(dialog);
    });

    dialog.querySelector('.btn-delete').addEventListener('click', () => {
        post.remove();
        document.body.removeChild(dialog);
        alert('Postingan berhasil dihapus.');
    });
}

// Membuat kotak dialog untuk edit
function showEditDialog(postContent) {
    const dialog = document.createElement('div');
    dialog.className = 'dialog-overlay';
    dialog.innerHTML = `
        <div class="dialog-box">
            <h3>Edit Postingan</h3>
            <textarea class="dialog-input">${postContent.textContent}</textarea>
            <div class="dialog-actions">
                <button class="btn btn-cancel">Batal</button>
                <button class="btn btn-save">Simpan</button>
            </div>
        </div>
    `;

    document.body.appendChild(dialog);

    dialog.querySelector('.btn-cancel').addEventListener('click', () => {
        document.body.removeChild(dialog);
    });

    dialog.querySelector('.btn-save').addEventListener('click', () => {
        const newContent = dialog.querySelector('.dialog-input').value;
        if (newContent.trim() !== '') {
            postContent.textContent = newContent;
            alert('Postingan berhasil diubah.');
        }
        document.body.removeChild(dialog);
    });
}

// Event listener untuk tombol hapus
document.querySelectorAll('.hapus').forEach(button => {
    button.addEventListener('click', function () {
        const post = this.closest('.post');
        showDeleteDialog(post);
    });
});

// Event listener untuk tombol edit
document.querySelectorAll('.edit').forEach(button => {
    button.addEventListener('click', function () {
        const postContent = this.closest('.post').querySelector('p');
        showEditDialog(postContent);
    });
});
