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

function toggle(){
    var x = document.getElementById("signin");
    if(x.style.display == "block"){
      x.style.display = "none";
    }
    else{
      x.style.display = "block";
    }
  }

  var searchInput = document.getElementById('search');
  var searchButton = document.getElementById('sb');
  
  searchButton.addEventListener('click', function() {
    var searchfood = searchInput.value;
    var searchTerm = searchfood.toLowerCase();
    
    if(searchTerm=="paradise"){
      window.location.href = `http://localhost/demo/cart%20page/Cart.php`;
    }
    else if(searchTerm=="cream stone" || searchTerm=="creamstone"){
      window.location.href = `http://localhost/demo/cart%20page2/Cart.php`;
    }
    else if(searchTerm=="dominos"){
      window.location.href = `http://localhost/demo/cart%20page3/Cart.php`;
    }
  });



