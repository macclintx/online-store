<?php

session_start();
    require __DIR__ . '/view/partials/header.php';
    require_once 'includes/config.php';
    require_once 'includes/functions.php';
   

    //load initial data from config
    if (!isset($_SESSION['products'])){
        $_SESSION['products'] = $products;
    }

    $errors = [];

    $filt = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        //handle filter
        $filt[] = filterByCategory($_POST['category'], $products);

            
       


      /*  if(filter_has_var(INPUT_POST, $_POST['category'])){
            $filter = $_POST['category'];
            $filtered[] = filterByCategory($filter, $products);
            echo $filtered;
        }*/  
    }
 

    //handle filter
   // $filter = $_POST['category'];
    //$filtered = filterByCategory($filter ,$products);

 include 'view/inventory.php';
require __DIR__ . '/view/partials/footer.php';