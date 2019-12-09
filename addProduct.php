<?php
    include_once("models/Products.php");
    $name = $_REQUEST["name"];
    $price = $_REQUEST["price"];
    $desc = $_REQUEST["desc"];
    $description = $_REQUEST["description"];
    $category_id = $_REQUEST["category"];
    // $image = $_REQUEST["image"];
    $star = $_REQUEST["star"];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileAvatar"]["name"]);
    move_uploaded_file($_FILES['fileAvatar']['tmp_name'], $target_file);
    $image = $target_file;

    Products::addProducts( $name, $price,$desc,$description, $star, $category_id, $image);
    // header("location:admin.php")
?>