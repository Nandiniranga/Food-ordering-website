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