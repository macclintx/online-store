<?php

session_start();
    require __DIR__ . '/view/partials/header.php';
    require_once 'includes/config.php';
    require_once 'includes/functions.php';

    //load initial data from config
    if (!isset($_SESSION['products'])){
        $_SESSION['products'] = $products;
    }

    $erros = [];

 
    

    //handle filter
    $filter = $_POST['category'];
    $filtered = filterByCategory($products ,$filter);

include 'view/inventory.php';
require __DIR__ . '/view/partials/footer.php';