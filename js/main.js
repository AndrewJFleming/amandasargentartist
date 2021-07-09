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

// Single 'Painting' post page image expand modal
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var modalBackground = document.getElementById("modalOverlay");

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks on overlay, close the modal
modalBackground.onclick = function() {
  modal.style.display = "none";
}