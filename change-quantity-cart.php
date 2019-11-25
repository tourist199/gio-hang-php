<?php 
    session_start();
    include_once("models/Cart.php");
    include_once("models/Products.php");

    Cart::changeQuantityCart($_REQUEST["id"],$_REQUEST["value"]);

    header("location:carts.php");
?>