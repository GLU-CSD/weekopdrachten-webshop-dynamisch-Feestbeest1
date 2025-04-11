<div class="cart-container">
        <h3>Your Cart</h3>
        <?php
        session_start();
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
    </div>
</div>