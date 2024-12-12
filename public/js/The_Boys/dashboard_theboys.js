const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');

// Set the background image
bodyElement.style.backgroundImage = `url('${assetsImg}/The_Boys/DASHBOARD/dashboard_bgheader.png')`;

// Set additional background styles
bodyElement.style.backgroundRepeat = 'no-repeat';
bodyElement.style.backgroundPosition = 'center top';
