document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click" ,function(e){
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior : "smooth"
        });
    });
});

var slideIndex = 9;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i, j;
  var slides = document.getElementsByClassName("img-sub");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 9}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  for(j = 1; j <= 9; j++){
    slides[slideIndex-j].style.display = "block";
  }
  dots[slideIndex-1].className += " active";
}