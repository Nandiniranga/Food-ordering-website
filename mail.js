let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("div1");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}  
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }  
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3500); 
}
function toggle(){
  var x = document.getElementById("signin");
  if(x.style.display == "block"){
    x.style.display = "none";
  }
  else{
    x.style.display = "block";
  }
}

function toggle2(){
  var y = document.getElementById("stay");
  var z = document.getElementById("check");
  if(y.style.display == "block"){
    z.style.color = "white";
    y.style.display = "none";
  }
  else{
    z.style.color = "#FF5F1F";
    y.style.display = "block";
  }
}

function toggle3(){
  var x = document.getElementById("signin");
  var y = document.getElementById("signup");
  if(x.style.display == "block"){
    x.style.display = "none";
    y.style.display = "block";
  }
  else{
    x.style.display = "block";
    y.style.display = "none";
  }
}

function toggle4(){
  var x = document.getElementById("signup");
  if(x.style.display == "block"){
    x.style.display = "none";
  }
  else{
    x.style.display = "block";
  }
}