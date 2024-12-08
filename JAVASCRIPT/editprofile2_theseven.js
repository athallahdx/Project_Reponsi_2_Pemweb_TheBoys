document.getElementById("choose-file-label").addEventListener("click", function() {
    document.getElementById("avatar").click();
});

document.getElementById("avatar").addEventListener("change", function(event) {
    const file = event.target.files[0];
    const successMessage = document.getElementById("success-message");

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("avatar-preview").src = e.target.result;

            // Tampilkan pesan sukses
            successMessage.classList.add("visible");
            setTimeout(() => {
                successMessage.classList.remove("visible"); // Sembunyikan setelah 3 detik
            }, 3000);
        };
        reader.readAsDataURL(file);
    }
});
