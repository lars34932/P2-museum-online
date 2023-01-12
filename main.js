// kijken of pagina geladen is
window.addEventListener("load", () => {

  // var gemaakt hoever gescrolled is
  let lastKnownScrollPosition = 0;

  const headerHeight = header.clientHeight;

  // kijken of er gescrolled word
  document.addEventListener("scroll", () => {

    // var aanpassen naar scroll punt
    lastKnownScrollPosition = window.scrollY;

    // checken of er voorbij de header gescrolled is, zo ja header fixed class word toegevoegd
    if (headerHeight <= lastKnownScrollPosition) {
      header.classList.add("header--fixed");
    }

    // checken of er voorbij de header gescrolled is, zo nee header fixed class word weggehaald
    else {
      header.classList.remove("header--fixed");
    }

  });

});


// FOTO SLIDER STUFF

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

