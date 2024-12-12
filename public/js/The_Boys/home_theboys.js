const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');
console.log(assetsImg);

bodyElement.style.backgroundImage = `url('${assetsImg}The_Boys/home_background.png')`;


// Fungsi untuk memulai Intersection Observer
function setupObserver(selector) {
    const element = document.querySelector(selector);
    if (element) {
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target); 
          }
        });
      }, {
        threshold: 0.5 
      });
      observer.observe(element);
    }
  }
  
  // Menyiapkan Intersection Observer untuk semua elemen
  setupObserver('.headline');
  setupObserver('.header-2');
  setupObserver('.image-1');
  setupObserver('.vaksin-text');
  setupObserver('.container-3 h2');
  setupObserver('.character-1');
  setupObserver('.character-2');
  setupObserver('.character-3');
  setupObserver('.character-4');
  setupObserver('.character-5');
  setupObserver('.theboys-card-4');

  // UNTUK MINI GAME...................................................

  function toggleImage(buttonId, imageId, imagePath1, imagePath2) {
    document.getElementById(buttonId).addEventListener("click", function () {
      const imageElement = document.getElementById(imageId);
      const currentSrc = imageElement.src;
  
      if (currentSrc.endsWith(imagePath1)) {
          imageElement.src = imagePath2; 
      } else {
          imageElement.src = imagePath1;
      }
    });
  }

// // Panggil fungsi toggleImage untuk setiap button dan image public\img\The_Boys\theseven_blacknoir2.png
toggleImage("change-image-button", "character-image", `${assetsImg}/The_Boys/theseven_blacknoir2.png`, `${assetsImg}/The_Boys/theseven_blacknoir2.png`);
toggleImage("change-image-button-2", "character-image-2", `${assetsImg}/The_Boys/theseven_atrain2.png`, `${assetsImg}/The_Boys/theseven_atrain2.png`);
toggleImage("change-image-button-3", "character-image-3", `${assetsImg}/The_Boys/theseven_stormfront2.png`, `${assetsImg}/The_Boys/theseven_stormfront2.png`);
toggleImage("change-image-button-4", "character-image-4", `${assetsImg}/The_Boys/theseven_thedeep2.png`, `${assetsImg}/The_Boys/theseven_thedeep2.png`);
toggleImage("change-image-button-5", "character-image-5", `${assetsImg}/The_Boys/theseven_homelander2.png`, `${assetsImg}/The_Boys/theseven_homelander2.png`);

// Panggil fungsi toggleImage untuk setiap button dan image
// toggleImage("change-image-button", "character-image", "../../img/The_Boys/theseven_blacknoir2.png", "../../img/The_Boys/theseven_blacknoir2.png");
// toggleImage("change-image-button-2", "character-image-2", "../../img/The_Boys/theseven_atrain2.png", "../../img/The_Boys/theseven_atrain2.png");
// toggleImage("change-image-button-3", "character-image-3", "../../img/The_Boys/theseven_stormfront2.png", "../../img/The_Boys/theseven_stormfront2.png");
// toggleImage("change-image-button-4", "character-image-4", "../../img/The_Boys/theseven_thedeep2.png", "../../img/The_Boys/theseven_thedeep2.png");
// toggleImage("change-image-button-5", "character-image-5", "../../img/The_Boys/theseven_homelander2.png", "../../img/The_Boys/theseven_homelander2.png");