<?php
include 'products.php'; // Productdata laden

// Haal het product-ID op uit de URL
$product_id = $_GET['id'] ?? null;

// Zoek het juiste product
$product = null;
foreach ($products as $p) {
    if ($p['id'] == $product_id) {
        $product = $p;
        break;
    }
}

// Als het product niet bestaat, stuur terug naar de homepage
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
    <p>&euro;<?php echo number_format($product['price'], 2, ',', '.'); ?></p>

    <!-- Afbeeldingsgalerij -->
    <div class="gallery">
        <div class="products-small-img">
            <img src="assets/img/Dumbell.jpg" alt="Dumbbell Set" onclick="myFunction(this)" width="100" height ="100">   
            <img src="assets/img/image.png" alt="Barbell" onclick="myFunction(this)"width="100" height ="100">   
            <img src="assets/img/imagecopy.png" alt="Kettlebell" onclick="myFunction(this)"width="100" height ="100">   
            <img src="assets/img/platen.png" alt="Platen" onclick="myFunction(this)"width="100" height ="100">   
            <img src="assets/img/bankje.png" alt="Bench" onclick="myFunction(this)"width="100" height ="100">   

        </div>
        <div class="img-container"> 
            <img id="imageBox" src="assets/img/squat.png">
        </div>
    </div>
    
    <script>
        function myFunction(smallImg) {
            var fullImg = document.getElementById("imageBox");
            fullImg.src =smallImg.src;
        }
    </script>


        <img id="mainImage" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
 



    <p><?php echo $product['description']; ?></p>
</section>
<script src="script.js" defer></script>

<script>
    function changeImage(thumbnail) {
        document.getElementById("mainImage").src = thumbnail.src;
    }
</script>

</body>
</html>
