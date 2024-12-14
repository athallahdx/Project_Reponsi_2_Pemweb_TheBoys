const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');

// Set the background image for the body
bodyElement.style.backgroundImage = `url('${assetsImg}The_Boys/DASHBOARD/home_background.png')`;
bodyElement.style.backgroundRepeat = 'no-repeat';
bodyElement.style.backgroundPosition = 'center top';

// Apply background images to each image overlay
const imageOverlays = [
    ...document.getElementsByClassName('image-overlay-1'),
    ...document.getElementsByClassName('image-overlay-2'),
    ...document.getElementsByClassName('image-overlay-3'),
    ...document.getElementsByClassName('image-overlay-4'),
    ...document.getElementsByClassName('image-overlay-5')
];

// Set background image for each image overlay
imageOverlays.forEach((overlay) => {
    overlay.style.backgroundImage = `url('${assetsImg}The_Boys/DASHBOARD/TEAM_MEMBERS/bercak_theboys.png')`;
    overlay.style.backgroundRepeat = 'no-repeat';
    overlay.style.backgroundPosition = 'center top';
});
