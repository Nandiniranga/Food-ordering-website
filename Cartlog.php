<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Cart.css?v=4">
    <link href="http://fonts.cdnfonts.com/css/lucida-sans" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <title>Dominos</title>
    <link rel="icon" type="image/PNG" href="logo.PNG">
</head>
<body>
    <nav>
        <img src = "logo.PNG" class="logo" alt = "logo">
        <h1 class="title">Straight to You</h1>
        <ul>
            <li><a class = "cont" href="http://localhost/demo/home/mail.php">Home</a></li>
            <li><a class = "cont" id="searchtag" href="http://localhost/demo/Search/search.php">Search</a></li>
            <li><a class = "cont" href="http://localhost/demo/orderspage/orderlog.php">Orders</a></li>
            <li><a class = "cont" href="http://localhost/demo/HelpPage/Help.php">Help</a></li>
            <li><a class = "cont" id="check" onclick="toggle2()"><?php echo $_SESSION['username']; ?></a></li>
        </ul>
    </nav>
    <div class="container">
       <header>
        <div class="shopping">
            <img class="cart"src="cart1.png" alt=""  width = 40px >
            <span class="quantity">0</span>
        </div>
       </header>
       <div class="list"></div> 
    </div>
    <div class="restname"><h1 class="rest1">Dominos</h1><p class="rest2">Kothapet, 1.4 Km</p></div>
    <div class="card">
        <h1>Cart</h1>
        <ul class="listCard"></ul>
        <div class = "checkout">
            <div class="total" onclick="togglex()">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    <div class="dd" id="stay">
        <h1 class="dd1">Your Account</h1>
        <a class="dd2"href="http://localhost/demo/cart page3/logout.php"><p class="dd3">Sign Out</p></a>
    </div>


    <div class="placed" id="pd">  
    <div class ="container2">
    <h1 class="ty">Thank you!</h1>
    <p class="p1">Your order has been placed successfully</p>
    <div class="thanks">
        <p2>placed.Thanks!</p2>
    </div>
    <div class = "end">
        <button onclick="window.location.href='http://localhost/demo/home/mail.php';" class="but1">OKAY!</button>
    </div>
    </div>
    <div class="image">
        <img src="download .png" alt="" width = 130px>
    </div>
    </div>


    <script src = "Cart.js?v=5"></script>
</body>
</html>