<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css?v=5">
    <link href="http://fonts.cdnfonts.com/css/lucida-sans" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <title>Straight to You</title>
    <link rel="icon" type="image/PNG" href="logo.PNG">
</head>
<body>
    <nav>
        <img src = "logo.PNG" class="logo" alt = "logo">
        <h1 class="title">Straight to You</h1>
        <ul>
            <li><a class = "cont" href="http://localhost/demo/home/mail.php">Home</a></li>
            <li><a class = "cont" id="searchtag" href="http://localhost/demo/Search/searchlog.php">Search</a></li>
            <li><a class = "cont" href="http://localhost/demo/orderspage/order.php">Orders</a></li>
            <li><a class = "cont" href="http://localhost/demo/HelpPage/Help.php">Help</a></li>
            <li><a onclick="toggle2()" id="check" class = "cont"><?php echo $_SESSION['username']; ?></a></li>
        </ul>
    </nav>
    <form onsubmit="event.preventDefault();" role="search">
        <label for="search">Search for stuff</label>
        <input id="search" type="search" placeholder="Search for restaurants" autofocus required />
        <button type="submit" id="sb"><img src = "search2.png" class="search" alt = "search" width="25%"></button>    
      </form>
    <a href="http://localhost/demo/cart%20page2/Cart.php"><img src = "icereal.jpeg" class = "ice" alt = "ice" width = 10%></a>
    <a href="http://localhost/demo/cart%20page3/Cart.php"><img src = "burger1.jpeg" class = "pizza" alt = "ice" width = 10%></a>
    <a href="http://localhost/demo/orderspage/order.php"><img src = "burger.jpg" class = "burger" alt = "ice" width = 8%></a>
    <a href="http://localhost/demo/orderspage/order.php"><img src = "tea.jpg" class = "tea" alt = "ice" width = 10%></a>
    <a href="http://localhost/demo/cart%20page/Cart.php"><img src = "northie.png" class = "northie" alt = "ice" width = 10%></a>
    <a href="http://localhost/demo/cart%20page/Cart.php"><img src = "southie.png" class = "southie" alt = "southie" width = 12%></a>
    <a href="http://localhost/demo/cart%20page/Cart.php"><img src ="chinese.png" class = "chinese" alt = "chinese" width = 12%></a>
    <a href="http://localhost/demo/cart%20page/Cart.php"><img src ="sweets.png" class = "sweets" alt = "chinese" width = 12%></a>
    <a href="http://localhost/demo/orderspage/order.php"><img src ="rolls.jpeg" class = "rolls" alt = "chinese" width = 10%></a>
    <a href="http://localhost/demo/orderspage/order.php"><img src ="beverages.jpg" class = "beverages" alt = "chinese" width = 8%></a>
    <h3 class = "l1">Icecream</h3>
    <h3 class = "l2">Pizza</h3>
    <h3 class   = "l3">Burger</h3>
    <h3 class = "l4">Tea & Coffee</h3>
    <h3 class = "l5">North Indian</h3>
    <h3 class = "l6">South Indian</h3>
    <h3 class = "l7">Chinese</h3>
    <h3 class = "l8">Desserts</h3>
    <h3 class = "l9">Rolls</h3>
    <h3 class = "l10">Beverages</h3>

    <div class="dd" id="stay">
        <h1 class="dd1">Your Account</h1>
        <a class="dd2"href="http://localhost/demo/Search/logout2.php"><p class="dd3">Sign Out</p></a>
    </div>
    <script src="seach.js?v=6"></script>
</body>
