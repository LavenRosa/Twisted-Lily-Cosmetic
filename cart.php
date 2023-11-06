<?php
session_start();

// Check if the product ID is passed through GET request
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Check if the product already exists in the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // If it does, increase the quantity
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        // If it doesn't, add it   to the cart with a quantity of 1
        $_SESSION['cart'][$product_id] = array(
            'quantity' => 1,
            // You may also want to store other product information like name, price, etc.
        );
    }

    // Redirect to the product listing or wherever you want to go after adding to the cart
    header('Location: product_listing.php');
    exit();
}

// Display the product listing
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>

    <h2>Product Listing</h2>

    <!-- Assume you have a list of products with Add to Cart links -->
    <ul>
        <li>Product 1 - <a href="add_to_cart.php?product_id=1">Add to Cart</a></li>
        <li>Product 2 - <a href="add_to_cart.php?product_id=2">Add to Cart</a></li>
        <!-- Add more products as needed -->
    </ul>

    <!-- Display the current cart content -->
    <h3>Shopping Cart</h3>
    <ul>
        <?php
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product_id => $product) {
                echo '<li>Product ' . $product_id . ' - Quantity: ' . $product['quantity'] . '</li>';
            }
        } else {
            echo '<li>Your cart is empty</li>';
        }
        ?>
    </ul>

</body>
</html>