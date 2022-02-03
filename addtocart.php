<?php 

session_start();

if (empty($_SESSION['cart'])){
$_SESSION['cart'] = array(); //initialization of our session cart
}

array_push($_SESSION['cart'], $_GET['id']); //adding id from url to our session

header("Location: cart.php")
?>