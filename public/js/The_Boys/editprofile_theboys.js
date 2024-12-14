const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');
const baseUrl = bodyElement.getAttribute('data-base-url');

// Set the background image
bodyElement.style.backgroundImage = `url('${assetsImg}The_Boys/DASHBOARD/home_background.png')`;

// Set additional background styles
bodyElement.style.backgroundRepeat = 'no-repeat';
bodyElement.style.backgroundPosition = 'center top';

const fileInput = document.getElementById('avatar');
const image = document.getElementById('avatar-preview'); // Use querySelector to select the image element

// Add event listener for the 'change' event
fileInput.addEventListener('change', function(event) {
    const file = event.target.files[0]; // Get the selected file

    // Check if a file is selected and if it is an image
    if (file && file.type.startsWith('image/')) {
        image.src = URL.createObjectURL(file); // Set the image source to the selected file
    } else {
        // Optionally, reset the image source to a default or error image
        image.src = `${baseUrl}uploads/members/userprofile/default.png`; // Use a default image in case the selected file is not an image
    }
});

