<?php

session_start();

require __DIR__. '/view/partials/header.php';
require __DIR__ . '/view/partials/footer.php';
include_once 'includes/config.php';
include_once 'includes/functions.php';

if (!isset($_SESSION['products'])){
    $_SESSION['products'] = $products;
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$errors = [];
$filt = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Filter
    $filt[] = filterByCategory($_POST['category'], $products);

    // Add to cart
    if (filter_has_var(INPUT_POST, 'quantity')) {
        $cart_id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $cart_quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);

        $item = addToCart($cart_id, $cart_quantity, $products);

        if ($item) {
            $_SESSION['cart'][] = $item;
        }

        $filt[] = $products;
    }

} else {
    $filt[] = $products;
}

include 'view/inventory.php';

print_r($_SESSION['cart']);
