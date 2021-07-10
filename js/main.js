const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const fullOverlay = document.getElementById("mobileOverlay");

// Click menu icon to expand mobile menu and display dark overlay
menuIcon.addEventListener('click', function () {
  if (slideoutMenu.style.opacity == "1") {
    slideoutMenu.style.opacity = '0';
    slideoutMenu.style.pointerEvents = 'none'; 
    fullOverlay.style.opacity = '0';
    fullOverlay.style.pointerEvents = 'none';
  } else {
    slideoutMenu.style.opacity = '1';
    slideoutMenu.style.pointerEvents = 'auto';
    fullOverlay.style.opacity = '1';
    fullOverlay.style.pointerEvents = 'auto';
  }
})

// Click overlay to hide mobile menu
fullOverlay.addEventListener('click', function () {
  if (slideoutMenu.style.opacity ==  "1") {
    slideoutMenu.style.opacity = '0';
    slideoutMenu.style.pointerEvents = 'none';
    fullOverlay.style.opacity = '0';
    fullOverlay.style.pointerEvents = 'none';
  } 
})