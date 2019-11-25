<?php 
    session_start();
    include_once("models/Cart.php");
    include_once("models/Products.php");

    Cart::checkOutBills();
    header("location:index.php");
?>