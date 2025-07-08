<?php

session_start();
    require __DIR__. '/view/partials/header.php';
    require __DIR__ . '/view/partials/footer.php';
    include_once 'includes/config.php';
    include_once 'includes/functions.php';
   

    //load initial data from config
    if (!isset($_SESSION['products'])){
        $_SESSION['products'] = $products;
    }

    $errors = [];

    $filt = [];
    $cart = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        //handle filter
        $filt[] = filterByCategory($_POST['category'], $products);

        //cart variables
        if(filter_has_var(INPUT_POST, 'quantity')){


            $cart_id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);
            $cart_quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
            
            
            $cart[] = [addToCart($cart_id, $cart_quantity, $products)];
            $filt[] = $products;
        }
        

      
    }else{
        $filt[] = $products; 
    }
    
    

    //handle filter
   // $filter = $_POST['category'];
    //$filtered = filterByCategory($filter ,$products);

 include 'view/inventory.php';

 print_r($cart);
