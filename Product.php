<?php
session_start();
include 'includes/productsArray.php'; 


$product_id = $_GET['id'] ?? null;

$product = null;
foreach ($products as $p) {
    if ($p['id'] == $product_id) {
        $product = $p;
        break;
    }
}


if (isset($_POST["product_id"])) {
    $productId = $_POST["product_id"];

    if (!isset($_SESSION["Cart"])) {
        $_SESSION["Cart"] = [];
    }

    array_push($_SESSION["Cart"], [
        "product_title" => $product['name'],
        "product_price" => $product['price']
    ]);

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
        <div class="logohoek">
            <a href="index.php#home"><h1>FitGym</h1></a>
        </div>
        <div class="menu-container">
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About us</a>
                <a href="#contact">Contact</a>
            </nav>
            <form action="Product.php?id=<?php echo $product_id; ?>" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <button type="submit" class="afrekenen">🛒</button>
            </form>  
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
