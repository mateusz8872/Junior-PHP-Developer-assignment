<?php 
session_start() ;
$_SESSION['cart'] = array();
session_unset();
session_destroy(); 
header("Location:cart.php");
?>