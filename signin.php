<?php 
session_start();
if(isset($_SESSION['username'])){
    header("Location:index.php");
    die();
}
$conn = mysqli_connect("localhost", "root", "");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = null;
    $sql = "SELECT * FROM Details.login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if($row==1){
        $_SESSION['username'] =   $username;
        header("Location:index.php");
    }else{
        // echo "<script>
        //     alert('Login Unsuccessful');
        //     window.location.href = 'mail.php';
        // </script>"; 
        $error = "Invalid Credentials";
    }
}

if(isset($_POST['signup'])){
    $reguser = $_POST['reguser'];
    $regpass = $_POST['regpass'];
    $confirmpass = $_POST['confirmpass'];
    $insert = "INSERT INTO Details.login(username, password) VALUES('$reguser', '$regpass')";
    mysqli_query($conn, $insert);
    echo "<script>
        alert('Signup Successful');
        window.location.href = 'mail.php';
    </script>"; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css?v=6">
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
        <img src = "logo.PNG" class="logo" alt = "logo">
        <h1 class="title">Straight to You</h1>
        <ul>
            <li><a class = "cont" href="http://localhost/demo/home/mail.php">Home</a></li>
            <li><a class = "cont" href="http://localhost/demo/Search/search.php">Search</a></li>
            <li><a class = "cont" href="http://localhost/demo/orderspage/order.php">Orders</a></li>
            <li><a class = "cont" href="http://localhost/demo/HelpPage/Help.php">Help</a></li>
            <li><a class = "cont" onclick="toggle()" id="hl">Sign In</a></li>
        </ul>
    </nav>

        <div class="center" id="signin">
            <h1 class="lh1">Login</h1>
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
                Not a member? <a href="#" onclick="toggle3()">Signup</a>
              </div>
              <p class="error"><?php if($error!=null){echo $error; }?></p>
            </form>
          </div>

          <div class="center2" id="signup">
            <h1 class="lh1">SignUp</h1>
            <form action="mail.php" method="post">
              <div class="txt_field">
                <input type="text" name="reguser" required>
                <span></span>
                <label>Username</label>
              </div>
              <div class="txt_field">
                <input type="password" name="regpass" required>
                <span></span>
                <label>Password</label>
              </div>
              <div class="txt_field">
                <input type="password" name="confirmpass" required>
                <span></span>
                <label>Confirm Password</label>
              </div>
              <input type="submit" value="Signup" name="signup">
              <div class="signin_link">
                Already Registered? <a href="#" onclick="toggle3()">Login</a>
              </div>
            </form>
          </div>
        <script src="signin.js?v=1"></script>
</body>
</html>