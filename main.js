const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
    if(window.pageYOffset > 30){
        nav.classList.add("scrolled");
    }else {
        nav.classList.remove("scrolled");
    }
})

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function validateForm() {
    let name = document.forms["myForm"]["fname"].value;
    if (!name.match(/^[A-Z][a-z]/)) {
        alert("Name duhet te filloj me shkronje te madhe dhe duhet te kete vetem tekst.");
        return false;
    }

    let email = document.forms["myForm"]["femail"].value;
    if (!email.match(/^w+[._-]?\w+@[a-z]\.[a-z]{2,3}/)) {
        alert("Email duhet te jete standart.");
        return false;
    }

    let password = document.forms["myForm"]["fpassword"].value;
    if (!password.match(/^[A-Z][a-z][0-9]{3}/)) {
        alert("Password duhet te filloj me shkronje te madhe dhe duhet te perfundoj me 3 numra.");
        return false;
    }
}