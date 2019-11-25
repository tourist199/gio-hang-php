<?php 
    session_start();
    if(!isset($_SESSION["username"])) 
        header("location:login.php");

    include_once("models/Cart.php");
    include_once("models/Products.php");

    $productItem = Products::getProductById($_REQUEST["id"]);
    Cart::addCarts($productItem);

    if(isset($_SESSION["username"])) 
        header("location:carts.php");
?>