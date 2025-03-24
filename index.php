<?php 
include 'includes/header.php';
include 'includes/sidebar.php';
include 'products.php';

// Groepeer producten per categorie
$categorizedProducts = [];
foreach ($products as $item) {
    $categorizedProducts[$item['category']][] = $item;
}
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
    <?php include 'includes/navbar.php'; ?>
</header>

<main>
    <h1>Onze producten</h1>
    
    <?php foreach ($categorizedProducts as $category => $items): ?>
        <h2><?= htmlspecialchars($category) ?></h2>
        <div class="product-container">
            <?php foreach ($items as $item): ?>
                <div class="product-card">
                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                    <h3><?= htmlspecialchars($item['name']) ?></h3>
                    <p class="price">&euro;<?= number_format($item['price'], 2, ',', '.') ?></p>
                    <button class="buy-btn">Bestellen</button>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</main>

<footer>
    <?php include 'includes/footer.php'; ?>
</footer>

</body>
</html>
