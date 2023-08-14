<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mail.css?v=7">
    <link href="http://fonts.cdnfonts.com/css/lucida-sans" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

    <title>Straight to You</title>
    <link rel="icon" type="image/PNG" href="logo.PNG">
</head>
<body>
    <nav>
        <img src = "logo.PNG" class="logo" alt = "logo" id="jump" onclick="window.location.href='http://localhost/demo/home/mail.php';">
        <h1 class="title">Straight to You</h1>
        <ul>
            <li><a class = "cont" id="home" href="http://localhost/demo/home/index.php">Home</a></li>
            <li><a class = "cont" href="http://localhost/demo/Search/search.php">Search</a></li>
            <li><a class = "cont" href="http://localhost/demo/orderspage/order.php">Orders</a></li>
            <li><a class = "cont" href="http://localhost/demo/HelpPage/Help.php">Help</a></li>
            <li><a onclick="toggle2()" id="check" class = "cont"><?php echo $_SESSION['username']; ?></a></li>
        </ul>
    </nav>
    <main class = "div-img">
        <div class = "div1" onclick="window.location.href='http://localhost/demo/orderspage/order.php';">
            <img src = "burger2.jpeg" id="uq" class = "slide fade" alt = "burger">
        </div>
        <div class = "div1" onclick="window.location.href='http://localhost/demo/cart%20page3/Cart.php';">
            <img src = "pizza2.avif" id="iq" class = "slide fade" alt = "pizza2">
        </div>
        <div class = "div1" onclick="window.location.href='http://localhost/demo/cart%20page2/Cart.php';">
            <img src = "icecream.jpeg" id="iq"class = "slide fade" alt = "icecream">
        </div>
    </main>

    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
    <div class="quote"><h1 class="up">Fresh Food</h1><h1 class="m"> at you're </h1><h1 class="lo">Fingertips</h1></div>
    <div class="matter"><p class="para">Just confirm your order and enjoy our delicious <br> fastest delivery.</p></div>
        <div class ="book" onclick="window.location.href='http://localhost/demo/orderspage/order.php';">
            <button class = "button2">
                <p>Book a Table</p>
            </button>
        </div>
        <div class = "order" onclick="window.location.href='http://localhost/demo/Search/search.php';">
            <button class = "button3">
                <p>Order Now</p>
            </button>
        </div>
    <div class="social">
        <p class="follow">Follow us - </p>
        <a href="mail.html"><img class = "sm1" src="fb.jpeg" alt="Facebook"></a>
        <a href="https://www.instagram.com/snandini__ranga/"><img class = "sm2" src="insta.png" alt="Instagram"></a>
        <a href=""><img class = "sm3" src="twitter.jpeg" alt="Twitter"></a>
    </div>

    <div class="popup" id="signin">
        <img src = "cancel2.png" class = "close" onclick="toggle()" alt = "Close">
        <div class="center">
            <h1>Login</h1>
            <form action="mail.php" method="post">
              <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
              </div>
              <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
              </div>
              <div class="pass">Forgot Password?</div>
              <input type="submit" value="Login" name="login">
              <div class="signup_link">
                Not a member? <a href="#">Signup</a>
              </div>
            </form>
          </div>
    </div>
    <div class="dd" id="stay">
        <h1 class="dd1">Your Account</h1>
        <a class="dd2"href="http://localhost/demo/home/logout1.php"><p class="dd3">Sign Out</p></a>
    </div>
    <script src="mail.js?v=1"></script>
</body>
</html>

