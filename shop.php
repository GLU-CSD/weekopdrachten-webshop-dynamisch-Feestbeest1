<?php 
include 'includes/header.php';
include 'includes/sidebar.php';
include 'products.php';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header> 
    <?php include 'includes/header.php'; ?>
</header>

<main>
    <h1>Onze producten</h1>

    <div class="product-container">
        <?php foreach($products as $item): ?>
            <div class="product-card">
                <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                <h3><?= $item['name'] ?></h3>
                <p class="price">&euro;<?= number_format($item['price'], 2, ',', '.') ?></p>
                <button class="buy-btn">Bestellen</button>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <?php include 'includes/footer.php';?>
</footer>   

</body>
</html>

