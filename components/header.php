<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="theme-color" content="#000000" />
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/shop-homepage.css" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="css/mdb.min.css" rel="stylesheet">
   <!-- Customizer -->
   <link rel="stylesheet" href="https://mdbootstrap.com/live/_MDB/css/customizer.min.css">
   <link href="css/freelancer.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">

   <title>React App</title>
</head>

<body>

<?php  
   session_start(); 
   include_once("./models/Category.php");
   include_once("./models/Products.php");
   include_once("./models/Cart.php");
   include_once("./models/Bill.php");
?>