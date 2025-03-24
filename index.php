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
    <link rel="stylesheet" href="script.js">
</head>
<body>

<div class="filter-container">
    <form method="GET" action="shop.php" id="filterForm">
        <label for="category">Categorie:</label>
        <select name="category" id="category">
            <option value="">Alle</option>
            <option value="Freeweight" <?= ($_GET['category'] ?? '') == 'Freeweight' ? 'selected' : '' ?>>Freeweight</option>
            <option value="Machines" <?= ($_GET['category'] ?? '') == 'Machines' ? 'selected' : '' ?>>Gym Machines</option>
        </select>

        <label for="min_price">Min prijs:</label>
        <input type="number" name="min_price" id="min_price" step="0.01" placeholder="0" value="<?= htmlspecialchars($_GET['min_price'] ?? '') ?>">

        <label for="max_price">Max prijs:</label>
        <input type="number" name="max_price" id="max_price" step="0.01" placeholder="1000" value="<?= htmlspecialchars($_GET['max_price'] ?? '') ?>">

        <button type="submit">Filter</button>
    </form>
</div>

<main>
    <h1>Onze producten</h1>

    <?php
    $selectedCategory = $_GET['category'] ?? '';
    $minPrice = $_GET['min_price'] ?? 0;
    $maxPrice = $_GET['max_price'] ?? PHP_INT_MAX;

    $filteredProducts = array_filter($products, function ($item) use ($selectedCategory, $minPrice, $maxPrice) {
        return ($selectedCategory === '' || $item['category'] === $selectedCategory) &&
               ($item['price'] >= floatval($minPrice) && $item['price'] <= floatval($maxPrice));
    });

    $categorizedProducts = [];
    foreach ($filteredProducts as $item) {
        $categorizedProducts[$item['category']][] = $item;
    }

    foreach ($categorizedProducts as $category => $items): ?>
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
    <?php include 'includes/footer.php';?>
</footer>   

</body>
</html>
