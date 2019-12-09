<?php
    include_once("models/Products.php");
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $price = $_REQUEST["price"];
    $desc = $_REQUEST["desc"];
    $description = $_REQUEST["description"];
    $category_id = $_REQUEST["category"];
    $star = $_REQUEST["star"];

    // $image = $_REQUEST["image"];
    if ($_FILES["fileAvatar"]["name"]!=""){
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["fileAvatar"]["name"]);
        move_uploaded_file($_FILES['fileAvatar']['tmp_name'], $target_file);
        $image = $target_file;
    }
    else 
        $image=null;
    
    Products::editProducts( $id,$name, $price,$desc,$description, $star, $category_id, $image);
    header("location:admin-products.php");
?>