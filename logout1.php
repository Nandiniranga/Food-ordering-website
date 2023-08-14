<?php 
session_start();

session_unset();
header("Location:http://localhost/demo/home/mail.php");
?>