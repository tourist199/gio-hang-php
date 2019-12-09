<?php 
    include_once("models/Products.php");
    Products::deleteProduct($_REQUEST["id"]);
    header("location:admin-products.php");
?>