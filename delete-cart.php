<?php 
    session_start();
    include_once("models/Cart.php");
    include_once("models/Products.php");

    Cart::deleteCart($_REQUEST["id"]);

    header("location:carts.php");
?>