<?php
include 'products.php'; 

$product_id = $_GET['id'] ?? null;

$product = null;
foreach ($products as $p) {
    if ($p['id'] == $product_id) {
        $product = $p;
        break;
    }
}

if (!$product) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <a href="index.php"><h1>FitGym</h1></a>
</header>

<section class="product-details">
    <h2><?php echo $product['name']; ?></h2>
    <p class="products-price">&euro;<?php echo number_format($product['price'], 2, ',', '.'); ?></p>
    <div class="gallery">
        <div class="products-small-img">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" onclick="changeImage(this)" width="100" height="100">
            
            <?php if (!empty($product['image2'])) { ?>
                <img src="<?php echo $product['image2']; ?>" alt="Extra afbeelding 1" onclick="changeImage(this)" width="100" height="100">
            <?php } ?>

            <?php if (!empty($product['image3'])) { ?>
                <img src="<?php echo $product['image3']; ?>" alt="Extra afbeelding 2" onclick="changeImage(this)" width="100" height="100">
            <?php } ?>
        </div>

        <div class="img-container"> 
            <img id="mainImage" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        </div>
    </div>
</section>  
<footer>
        <p>&copy; 2025 Webshop. All rights reserved.</p>
        <p><a href="#privacy">Privacybeleid</a></p>
    </footer>

<script src="script.js" defer></script>

</body>
</html>
