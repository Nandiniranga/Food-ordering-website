<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css" type="text/css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
            <li><a class = "cont" id="searchtag" href="http://localhost/demo/Search/search.php">Search</a></li>
            <li><a class = "cont" id = "home" href="http://localhost/demo/orderspage/orderlog.php">Orders</a></li>
            <li><a class = "cont" href="http://localhost/demo/HelpPage/Help.php">Help</a></li>
            <li><a onclick="toggle2()" id="check" class = "cont"><?php echo $_SESSION['username']; ?></a></li>
        </ul>
    </nav>

    <main class = "div-img" data-aos="fade" data-aos-duration="1000">
        <div class = "div1">
            <img src = "cover7.jpg" id="iq" class = "slide fade" alt = "">
        </div>
        <div class = "div1">
            <img src = "cover8.jpg" id="iq" class = "slide fade" alt = "">
        </div>
        <div class = "div1">
             <img src = "cover4.jpg" id="iq"class = "slide fade" alt = "">
        </div>
    </main>

    <div style="text-align:center" data-aos="fade" data-aos-duration="1000">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>

    <div class="order">
       <div class="wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="card">
            <img src="res1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="details">
                        <span>Up-South</span>
                        <p>Near LB-Nagar</p>
                    </div>
                    <div class="price">$10 for two</div>
                    <div class = "rating">34 min</div>
                </div>
                <div class="buttons">
                    <button><p>Order Now</p></button>
                    <button><p>Book a Table</p></button>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="res2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="details">
                        <span>Paradise</span>
                        <p>Near Kothapet</p>
                    </div>
                    <div class="price">$30 for two</div>
                    <div class = "rating">34 min</div>
                </div>
                <div class="buttons">
                    <button onclick="window.location.href='http://localhost/demo/cart%20page/Cart.php';"><p>Order Now</p></button>
                    <button onclick="window.location.href='http://localhost/demo/Paradise/book.php';"><p>Book a Table</p></button>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="res3.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="details">
                        <span>Cream Stone</span>
                        <p>Near Uppal</p>
                    </div>
                    <div class="price">$40 for two</div>
                    <div class = "rating1">34 min</div>
                </div>
                <div class="buttons">
                    <button onclick="window.location.href='http://localhost/demo/cart%20page2/Cart.php';"><p>Order Now</p></button>
                    <button onclick="window.location.href='http://localhost/demo/Creamstone/book.php';"><p>Book a Table</p></button>
                </div>
            </div>
        </div>
       </div>
    </div>
    <div class="order2">
        <div class="wrapper" data-aos="fade-up" data-aos-duration="1000">
            <div class="card">
                <img src="res4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="details">
                            <span>ZAM-ZAM</span>
                            <p>Near LB-Nagar</p>
                        </div>
                        <div class="price1">$10 for two</div>
                        <div class = "place">40 min</div>
                    </div>
                    <div class="buttons">
                        <button><p>Order Now</p></button>
                        <button><p>Book a Table</p></button>
                    </div>
                </div>
            </div>
                <div class="card">
                    <img src="res6.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="details">
                                <span>Cafe Coffee day</span>
                                <p>Near Market</p>
                            </div>
                            <div class="price1">$10 for two</div>
                            <div class = "place">28 min</div>
                        </div>
                        <div class="buttons">
                            <button><p>Order Now</p></button>
                            <button><p>Book a Table</p></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="res5.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="details">
                                <span>Domino's Pizza</span>
                                <p>Near Kothapet</p>
                            </div>
                            <div class="price1">$30 for one</div>
                            <div class = "place">20 min</div>
                        </div>
                        <div class="buttons">
                            <button onclick="window.location.href='http://localhost/demo/cart%20page3/Cart.php';"><p>Order Now</p></button>
                            <button onclick="window.location.href='http://localhost/demo/Dominos/book.php';"><p>Book a Table</p></button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <form onsubmit="event.preventDefault();" role="search">

    <div class="dd" id="stay">
        <h1 class="dd1">Your Account</h1>
        <a class="dd2"href="http://localhost/demo/orderspage/logout3.php"><p class="dd3">Sign Out</p></a>
    </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init({
            duration: 3000,
            once: true,
          });
        </script>

        <script src="order.js?v=1"></script>
</body>