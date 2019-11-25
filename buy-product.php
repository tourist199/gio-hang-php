<?php 
    session_start();
    include_once("models/Cart.php");
    include_once("models/Products.php");

    $productItem = Products::getProductById($_REQUEST["id"]);
    Cart::addCarts($productItem);

    header("location:carts.php");
?>