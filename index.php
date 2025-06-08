<?php

session_start();
    require_once 'includes/config.php';
    //require_once 'includes/functions.php';

    //load initial data from config
    if (!isset($_SESSION['products'])){
        $_SESSION['products'] = $products;
    }


include 'view/partials/header.php';
include 'view/inventory.php';
include 'view/partials/footer.php';