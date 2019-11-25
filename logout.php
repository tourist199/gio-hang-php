<?php
    session_start();
    unset($_SESSION["name"]);
    unset($_SESSION["username"]);
    header("location:index.php");
?>