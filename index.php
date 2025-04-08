<?php
// session_start();
include 'includes/sidebar.php';
include 'includes/header.php';
include 'includes/Filter.php';
include 'includes/productsArray.php';


?>

    <?php
    foreach($categoriesWithProducts as $category => $products) {
        ?>
        <section id="<?php echo $category ?>" class="productSection">
            <h3><?php echo $category ?></h3>
            <div class="products">
            <?php foreach ($products as $product){ ?>
                <div class="product" data-category="<?php echo $category; ?>" data-price="<?php echo $product['price']; ?>">
                    <a href="product.php?id=<?php echo $product['id']; ?>">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h3><?php echo $product['name']; ?></h3>
                    </a>
                    <p>&euro;<?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                    <form action="product.php?id=<?php echo $product['id']; ?>" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit">Order</button>
                </form>
                </div>
            <?php } ?>
            </div>
        </section>
        <?php
    }
    ?>
    <script src="script.js" defer></script>

    <script>
        function scrollToHome() {
            document.getElementById("home").scrollIntoView({ behavior: "smooth" });
        }
        
        function scrollToAbout() {
            document.getElementById("about").scrollIntoView({ behavior: "smooth" });
        }

        function scrollToContact() {
            document.getElementById("contact").scrollIntoView({ behavior: "smooth" });
        }
    </script>
<?php 
    include 'includes/contact_about.php';   
    include 'includes/footer.php';  
?>

</body>
</html>
