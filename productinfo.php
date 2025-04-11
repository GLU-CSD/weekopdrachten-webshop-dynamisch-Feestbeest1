<?php
session_start(); 
include 'includes/header.php';
?>

<div class="cart-container">
    <h3>Your Cart</h3>
    <?php
    if (isset($_SESSION['Cart']) && !empty($_SESSION['Cart'])) {
        foreach ($_SESSION['Cart'] as $item) {
            echo '<div class="cart-item">';
            foreach ($item as $key => $value) {
                echo "<p><strong>" . htmlspecialchars($key) . "</strong>: " . htmlspecialchars($value) . "</p>";
            }
            echo '</div>';
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
    <a href="Formulier/bestel.php">Order</a>
</div>


