<section id="freeweight" class="freeweight">
    <h3>Freeweight</h3>
    <div class="products">
    <?php foreach ($products as $product) : ?>
        <div class="product" 
             data-category="<?php echo $product['category']; ?>" 
             data-price="<?php echo $product['price']; ?>">
            <a href="product.php?id=<?php echo $product['id']; ?>">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
            </a>
            <p>&euro;<?php echo number_format($product['price'], 2, ',', '.'); ?></p>
            <button>Order</button>
        </div>
    <?php endforeach; ?>
</div>

</section>

<section id="gymmachines" class="freeweight">
    <h3>Gym Machines</h3>
    <div class="products">
        <?php foreach ($products as $product) : ?>
            <?php if ($product['category'] === 'Machines') : ?>
                <div class="product" 
                     data-category="<?php echo $product['category']; ?>" 
                     data-price="<?php echo $product['price']; ?>">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>&euro;<?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                    <button>Order</button>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>