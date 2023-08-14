<?php
$conn = mysqli_connect("localhost", "root", "");
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM Details.login WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:index.html');
        }
        else{
            echo "<script>
                alert('Login Unsuccessful');
            </script>";
        }
    }
}
?>