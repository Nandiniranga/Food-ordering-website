<?php 
session_start();

session_unset();
header("Location:http://localhost/demo/orderspage/order.php");
?>